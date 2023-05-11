<div class="container-fluid bg-dark __footer">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-white">©
                <?php
                // Get the current timestamp
                $timestamp = time();
                // Format the timestamp as a date string using the date() function
                //$date = date('Y-m-d', $timestamp);
                // Get the current year
                $year = date('Y', $timestamp);
                // Output the year string
                echo $year;

                ?> Boolean, Classe #88</span>
        </div>

    </div>
</div>
