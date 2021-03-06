{{-- Layout and design by WhileD0S <https://vk.com/whiled0s>  --}}
<div class="l-shop-collapse">
    <p class="a-b-header">@lang('sidebar.admin.title')</p>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-cogs left"></i>@lang('sidebar.admin.control.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.control.main_settings', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.control.nodes.main_settings')</a>
            <a href="{{ route('admin.control.payments', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.control.nodes.payments')</a>
            <a href="{{ route('admin.control.api', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.control.nodes.api')</a>
            <a href="{{ route('admin.control.security', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.control.nodes.security')</a>
            <a href="{{ route('admin.control.optimization', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.control.nodes.optimization')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-server left"></i>@lang('sidebar.admin.servers.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.servers.add', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.servers.nodes.add')</a>
            <a href="{{ route('admin.servers.list', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.servers.nodes.edit')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-cubes left"></i>@lang('sidebar.admin.products.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.products.add', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.products.nodes.add')</a>
            <a href="{{ route('admin.products.list', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.products.nodes.edit')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-diamond left"></i>@lang('sidebar.admin.items.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.items.add', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.items.nodes.add')</a>
            <a href="{{ route('admin.items.list', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.items.nodes.edit')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-newspaper-o left"></i>@lang('sidebar.admin.news.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.news.add', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.news.nodes.add')</a>
            <a href="{{ route('admin.news.list', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.news.nodes.edit')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-files-o left"></i>@lang('sidebar.admin.pages.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.pages.add', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.pages.nodes.add')</a>
            <a href="{{ route('admin.pages.list', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.pages.nodes.edit')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-users left"></i>@lang('sidebar.admin.users.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.users.list', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.users.nodes.edit')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-ellipsis-h left"></i>@lang('sidebar.admin.other.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.other.rcon', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.other.nodes.rcon')</a>
            <a href="{{ route('admin.other.debug', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.other.nodes.debug')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-pencil left"></i>@lang('sidebar.admin.statistic.name')</button>
        <ul class="ad-btn-list">
            <a href="{{ route('admin.statistic.show', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.statistic.nodes.show')</a>
            <a href="{{ route('admin.statistic.payments', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.statistic.nodes.payments')</a>
        </ul>
    </div>
    <div class="ad-btn-block">
        <button class="btn btn-info btn-block admin-menu-btn"><i class="fa fa-info left"></i>@lang('sidebar.admin.info.name')</button>
        <ul class="ad-btn-list">
            <a href="https://github.com/D3lph1/L-shop/wiki" target="_blank" class="waves-effect">@lang('sidebar.admin.info.nodes.docs')</a>
            <a href="{{ route('admin.info.about', ['server' => $currentServer->getId()]) }}" class="waves-effect">@lang('sidebar.admin.info.nodes.about')</a>
        </ul>
    </div>
</div>