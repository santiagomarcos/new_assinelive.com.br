<div class="navbar-header">
    <a class="navbar-brand" href="{{ route('admin.home') }}">
        <div class="icon fa fa-paper-plane"></div>
        <div class="title">Assine Live - Admin</div>
    </a>
    <button type="button" class="navbar-expand-toggle pull-right visible-xs">
        <i class="fa fa-times icon"></i>
    </button>
</div>
<li class="active">
    <a href="{{ route('admin.home') }}">
        <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
    </a>
</li>
<li class="panel panel-default dropdown">
    <a data-toggle="collapse" href="#dropdown-element">
        <span class="icon fa fa-users"></span><span class="title">Afiliados</span>
    </a>
    <!-- Dropdown level 1 -->
    <div id="dropdown-element" class="panel-collapse collapse">
        <div class="panel-body">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('admin.affiliates.all') }}">Gerenciar Afiliados</a>
                </li>
                <li><a href="ui-#">Relatórios</a>
                </li>
            </ul>
        </div>
    </div>
</li>
<li class="panel panel-default dropdown">
    <a data-toggle="collapse" href="#dropdown-table">
        <span class="icon fa fa-search-plus"></span><span class="title">Consultas Site</span>
    </a>
    <!-- Dropdown level 1 -->
    <div id="dropdown-table" class="panel-collapse collapse">
        <div class="panel-body">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('admin.consults.all') }}">Consultas de Viabilidade</a>
                </li>
                <li><a href="#">Acessos</a>
                </li>
            </ul>
        </div>
    </div>
</li>
<li class="panel panel-default dropdown">
    <a data-toggle="collapse" href="#dropdown-form">
        <span class="icon fa fa-file-text-o"></span><span class="title">Blog</span>
    </a>
    <!-- Dropdown level 1 -->
    <div id="dropdown-form" class="panel-collapse collapse">
        <div class="panel-body">
            <ul class="nav navbar-nav">
                <li><a href="#">Criar/Editar Posts</a>
                </li>
                <li><a href="#">Criar/Editar Categorias</a>
                </li>
                <li><a href="#">Criar/Editar Tags</a>
                </li>
            </ul>
        </div>
    </div>
</li>
<!-- Dropdown-->
<li class="panel panel-default dropdown">
    <a data-toggle="collapse" href="#component-example">
        <span class="icon fa fa-cubes"></span><span class="title">Faqs</span>
    </a>
    <!-- Dropdown level 1 -->
    <div id="component-example" class="panel-collapse collapse">
        <div class="panel-body">
            <ul class="nav navbar-nav">
                <li><a href="#">Criar / Editar Faqs</a>
                </li>
            </ul>
        </div>
    </div>
</li>
<!-- Dropdown-->
<li class="panel panel-default dropdown">
    <a data-toggle="collapse" href="#dropdown-example">
        <span class="icon fa fa-cogs"></span><span class="title">Configurações</span>
    </a>
    <!-- Dropdown level 1 -->
    <div id="dropdown-example" class="panel-collapse collapse">
        <div class="panel-body">
            <ul class="nav navbar-nav">
                <li><a href="#">Criar/Editar Usuários</a>
                </li>
                <li><a href="#">Landing Page</a>
                </li>
            </ul>
        </div>
    </div>
</li>
