<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('Me') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Mon ecole') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Messages') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'all_message') class="active " @endif>
                            <a href="{{ route('pages.all_message')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Tous les messages') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'all_message') class="active " @endif>
                            <a href="{{ route('pages.all_message')  }}">
                                <i class="tim-icons icon-chat-33"></i>
                                <p>{{ __('Envoyer un message') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('publicités') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('pages.all_ads')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Toutes les publicités') }}</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Profile') }}</p>
                            </a>
                        </li>
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.all_institution') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ __('Tous les établissements') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
