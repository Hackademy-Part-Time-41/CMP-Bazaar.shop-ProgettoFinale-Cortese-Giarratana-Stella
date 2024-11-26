<div class="">
    @if (app()->getLocale() == 'it')
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <x-_locale lang="it" />
            </a>
            <ul class="dropdown-menu navbar-customclass">
                <li><x-_locale lang="en" /></li>
                <li><x-_locale lang="es" /></li>
            </ul>
        </li>
    @elseif (app()->getLocale() == 'en')
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <x-_locale lang="en" />
            </a>
            <ul class="dropdown-menu navbar-customclass">
                <li><x-_locale lang="it" /></li>
                <li><x-_locale lang="es" /></li>
            </ul>
        </li>
    @elseif (app()->getLocale() == 'es')
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <x-_locale lang="es" />
            </a>
            <ul class="dropdown-menu navbar-customclass">
                <li><x-_locale lang="it" /></li>
                <li><x-_locale lang="en" /></li>
            </ul>
        </li>
    @endif
</div>
