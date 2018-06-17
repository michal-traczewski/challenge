<nav class="navbar navbar-inverse navbar-fixed-top">
    <div id="navbar-inner">
        <div class="container-fluid">
            <?php if (!isset($nav_selection)): ?>
                <?php $nav_selection = ""; ?>
            <?php endif ?>
            <ul class="nav navbar-nav">
                <li class=<?= ($nav_selection == 'motorbikes') ? "active" : ""?> ><a href="/motorbikes">Motorbikes</a></li>
                <li class=<?= ($nav_selection == 'cards') ? "active" : ""?> ><a href="/cards">Playing Cards</a></li>
                <li class=<?= ($nav_selection == 'bookstore') ? "active" : ""?> ><a href="/bookstore">Bookstore</a></li>
            </ul>
        </div>
    </div>
</nav>
