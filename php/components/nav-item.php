<?php
function createNavItem($id, $label) {
    echo '
        <li class="nav-item">
            <a href="#'.$id.'" class="nav-link"><span class="link-text">'.$label.'</span></a>
        </li>
    ';
}
?>