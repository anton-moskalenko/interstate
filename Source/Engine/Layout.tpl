<!DOCTYPE html>
<html lang="en">
    <head>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/anton-moskalenko/rune-framework/Frontside/Library/Jquery.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/anton-moskalenko/rune-framework/Frontside/Library/Underscore.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/anton-moskalenko/rune-framework/Frontside/Library/Backbone.min.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/vendor/anton-moskalenko/rune-api/Client/API.js'); ?></script>
        <script><?php echo file_get_contents(ROOT_DIR . '/Source/Client/Command.js'); ?></script>
        <style><?php echo file_get_contents(ROOT_DIR . '/Source/Engine/Manager.css'); ?></style>
        <title>Rune</title>
    </head>
    <body>
        <div id="header">

        </div>
        <table style="width: 100%;height: 96%;">
            <tr>
                <td id="map">

                </td>
                <td id="page">

                </td>
            </tr>
        </table>
        <script>

        </script>
    </body>
</html>