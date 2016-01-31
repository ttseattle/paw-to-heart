<div class="form-group filter">
    Filter your search:
        <!-- selector for specifying what order the movie results are displayed in -->
    <form class="navbar-form" method="post" action="">
        Species
        <select id="selector" name="taskOption" onchange="form.submit()">
            <option value="all" <?= $_POST['taskOption'] == 'all' ? ' selected = "selected"' : ''; ?>> All </option>
            <option value="dog" <?= $_POST['taskOption'] == 'dog' ? ' selected = "selected"' : ''; ?>> Dog </option>
            <option value="cat" <?= $_POST['taskOption'] == 'cat' ? ' selected = "selected"' : ''; ?>> Cat </option>
        </select>
    </form>
</div>