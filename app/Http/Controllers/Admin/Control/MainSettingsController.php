<?php
declare(strict_types = 1);

namespace App\Http\Controllers\Admin\Control;

use App\TransactionScripts\Shop\News;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SaveMainSettingsRequest;
use Illuminate\View\View;

/**
 * Class MainSettingsController
 *
 * @author D3lph1 <d3lph1.contact@gmail.com>
 * @package App\Http\Controllers\Admin\Control
 */
class MainSettingsController extends Controller
{
    /**
     * Render the main settings page.
     */
    public function render(Request $request): View
    {
        $data = [
            'currentServer' => $request->get('currentServer'),
            'shopName' => s_get('shop.name', 'L - Shop'),
            'shopDescription' => s_get('shop.description'),
            'shopKeywords' => s_get('shop.keywords'),
            'accessMode' => s_get('shop.access_mode'),
            'enableSignup' => (bool)s_get('shop.enable_signup'),
            'enableEmailActivation' => (bool)s_get('auth.email_activation'),
            'signupRedirect' => (bool)s_get('auth.signup.redirect'),
            'signupRedirectUrl' => s_get('auth.signup.redirect_url'),

            'skinEnabled' => s_get('profile.character.skin.enabled'),
            'hdSkinEnabled' => s_get('profile.character.skin.hd'),
            'skinMaxFileSize' => s_get('profile.character.skin.max_size'),
            'cloakEnabled' => s_get('profile.character.cloak.enabled'),
            'hdCloakEnabled' => s_get('profile.character.cloak.hd'),
            'cloakMaxFileSize' => s_get('profile.character.cloak.max_size'),

            'enableNews' => (bool)s_get('news.enabled'),
            'newsFirstPortion' => s_get('news.first_portion'),
            'newsPerPage' => s_get('news.per_page'),
            'productsPerPage' => s_get('catalog.products_per_page'),
            'paymentsPerPage' => s_get('profile.payments_per_page'),
            'cartPerPage' => s_get('profile.cart_items_per_page'),
            'productsSortType' => s_get('shop.sort', 'name'),
            'enableMonitoring' => s_get('monitoring.enabled'),
            'rconConnectionTimeout' => s_get('monitoring.rcon.timeout'),
            'rconMonitoringPattern' => s_get('monitoring.rcon.pattern'),
            'cartCapacity' => s_get('cart.capacity'),
            'isDownForMaintenance' => $this->app->isDownForMaintenance()
        ];

        return view('admin.control.main_settings', $data);
    }

    /**
     * Save main settings options.
     */
    public function save(SaveMainSettingsRequest $request, News $news): RedirectResponse
    {
        $newsFirstPortion = (int)$request->get('news_first_portion');

        if ($newsFirstPortion != s_get('news.first_portion')) {
            // Clear news data from cache
            $news->forgetNews();
        }

        s_set([
            'shop.name' => $request->get('shop_name'),
            'shop.description' => $request->get('shop_description'),
            'shop.keywords' => $request->get('shop_keywords'),
            'shop.access_mode' => $request->get('access_mode'),
            'shop.enable_signup' => (bool)$request->get('enable_signup'),
            'auth.email_activation' => (bool)$request->get('enable_email_activation'),
            'auth.signup.redirect' => (bool)$request->get('signup_redirect'),
            'auth.signup.redirect_url' => $request->get('signup_redirect_url'),
            'news.enabled' => (bool)$request->get('news_enabled'),
            'news.first_portion' => $newsFirstPortion,
            'news.per_page' => (int)$request->get('news_per_page'),
            'catalog.products_per_page' => $request->get('products_per_page'),
            'profile.payments_per_page' => $request->get('payments_per_page'),
            'profile.cart_items_per_page' => $request->get('cart_per_page'),
            'shop.sort' => $request->get('products_sort_type'),
            'monitoring.enabled' => $request->get('enable_monitoring'),
            'monitoring.rcon.timeout' => $request->get('rcon_connection_timeout'),
            'monitoring.rcon.pattern' => $request->get('rcon_monitoring_pattern'),
            'cart.capacity' => $request->get('cart_capacity'),

            'profile.character.skin.enabled' => (bool)$request->get('character_skin_enabled'),
            'profile.character.cloak.enabled' => (bool)$request->get('character_cloak_enabled'),
            'profile.character.skin.hd' => (bool)$request->get('character_hd_skin_enabled'),
            'profile.character.cloak.hd' => (bool)$request->get('character_hd_cloak_enabled'),
            'profile.character.skin.max_size' => $request->get('character_skin_max_file_size'),
            'profile.character.cloak.max_size' => $request->get('character_cloak_max_file_size'),
        ]);
        s_save();

        $this->maintenance((bool)$request->get('maintenance'));
        $this->msg->success(__('messages.admin.changes_saved'));

        return back();
    }

    /**
     * Enable/disable maintenance mode.
     */
    public function maintenance(bool $maintenance)
    {
        $artisan = $this->app->make(Kernel::class);

        if ($maintenance) {
            $artisan->call('down');
        }else {
            $artisan->call('up');
        }
    }
}
