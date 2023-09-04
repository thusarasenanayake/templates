<?php
$user = $_POST['user_name'] ?? null;
$pass = $_POST['password'] ?? null;

if (
        $user == "admin"
        && $pass == "admin"
) {
        define('AUTH', TRUE);
        include("secured.php");

} else {
        if (isset($_POST)) { ?>

                <style>
                        body {
                                font-family: sans-serif;
                                background: -webkit-linear-gradient(to right, #155799, #159957);
                                background: linear-gradient(to right, #155799, #159957);
                                color: whitesmoke;
                        }


                        h1 {
                                text-align: center;
                        }

                        form {
                                width: 35rem;
                                margin: auto;
                                color: whitesmoke;
                                backdrop-filter: blur(16px) saturate(180%);
                                -webkit-backdrop-filter: blur(16px) saturate(180%);
                                background-color: rgba(11, 15, 13, 0.582);
                                border-radius: 12px;
                                border: 1px solid rgba(255, 255, 255, 0.125);
                                padding: 20px 25px;
                        }

                        input[type=text],
                        input[type=password] {
                                width: 100%;
                                margin: 10px 0;
                                border-radius: 5px;
                                padding: 15px 18px;
                                box-sizing: border-box;
                        }

                        button {
                                background-color: #030804;
                                color: white;
                                padding: 14px 20px;
                                border-radius: 5px;
                                margin: 7px 0;
                                width: 100%;
                                font-size: 18px;
                        }

                        button:hover {
                                opacity: 0.6;
                                cursor: pointer;
                        }
                        /* Media queries for the responsiveness of the page */
                        @media screen and (max-width: 600px) {
                                form {
                                        width: 25rem;
                                }
                        }

                        @media screen and (max-width: 400px) {
                                form {
                                        width: 20rem;
                                }
                        }
                </style>

                <form method="POST">
                        <label for="user_name">User Name : </label>
                        <input type="text" id="user_name" name="user_name"></input><br />
                        <label for="password">Password : </label>
                        <input type="password" name="password" id="password"></input><br />
                        <button type="submit">Submit</button>
                </form>
        <? }
}
?>