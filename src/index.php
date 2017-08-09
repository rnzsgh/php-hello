<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Simple PHP App</title>
    </head>

    <body>
        <h1>Simple PHP App</h1>
        <h2>Congratulations</h2>
        <p>Your PHP application is now running on a container in Amazon ECS.</p>
        <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
        <?php
          fwrite(STDOUT, "Sample PHP page viewed");
          $myfile = fopen("/var/www/my-vol/date", "r") or die("");
          echo fread($myfile,filesize("/var/www/my-vol/date"));
          fclose($myfile);
        ?>

        <br><a href="/404">Not Found</a>
    </body>
</html>
