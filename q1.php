<html>
    <head></head>
    <body>
        <h3>Please key in any number 5 times between 1 - 9</h3>
        <form action="" method="post">
            <select name="user" id="">
                <option value="user1">User 1</option>
                <option value="user2">User 2</option>
                <option value="user3">User 3</option>
            </select>
            <input type="text" name="inputNum">
            <input type="submit">
        </form>
        <?php

            $users = $_POST["user"];
            $display = $_POST["inputNum"];
            if ($users == "user1") {
                user1();
            } elseif ($users == 'user2'){
                user2();
            } else {
                user3();
            }

            function user1() {
                $user1 = [];
                global $display;
                for ($i=0; $i < 5; $i++){
                    array_push($user1,$display[$i]);
                    
                } echo "User 1 - ".implode (",", $user1);
            }

            function user2() {
                $user2 = [];
                global $display;
                for ($i=0; $i < 5; $i++){
                    array_push($user2,$display[$i]);
                    
                } echo "User2 - ".implode (",", $user2);
            }

            function user3() {
                $user3 = [];
                global $display;
                for ($i=0; $i < 5; $i++){
                    array_push($user3,$display[$i]);
                    
                } echo "User3 - ".implode (",", $user3);
            }
        ?>
    </body>
</html>