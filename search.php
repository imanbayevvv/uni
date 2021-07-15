

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Uniledge | Результаты поиска</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
    <?php
	// error_reporting(0);
	require('forOld.html') ?>

	<header class="header" id="header">
		<?php require_once('header.php') ?>
    </header>

    <section class="search-result" id="search-result" style="margin: 0;">

        <div class="profile_wrapper">
            <div class="search_wrapper_content" style="color:#fff;">
                <h1 style="font-size: 32px">Результаты поиска</h1>
            </div>
        </div>

        <div class="search_wrapper_content">
           
            
                <?php
    abstract class DB{      
        public function Conn(){
            return mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
        }
        public function mysql(){
            return new mysqli('localhost' , 'nurd' , '171119' , 'uniledge_uni');
        }
    }
                    $search = new Search();
                    $search->check();

                    class Search extends DB{
                        private $text1;

                        public function __construct() {
                            $this->text1 = isset($_POST['search-input']) ? $_POST['search-input'] : null;
                        }

                        public function getText() {
                            return $this->text1;
                        }

                        public function check()
                        {
                            $text = $this->text1;
                            
                            $conn = $this->Conn();
                                if(mysqli_connect_error()){
                                    print mysqli_connect_error();
                                    exit;
                                }
							mysqli_set_charset($conn, "utf8");

                                $sql = "SELECT DISTINCT href, uni_id, img, alt, logo, name, location
                                FROM universities
                                WHERE universities.name LIKE '%a%'";


                                $result = mysqli_query($conn,$sql);
                                $print = mysqli_fetch_all($result,MYSQLI_ASSOC);
                                
                                if($print) {
                                    print '<div class="card-box">';
                                    foreach ($print as $key => $value) {
                                        foreach ($value as $key1 => $value1) {
                                            if ($key1 == "href"){
                                                print '<a href="';
                                                print $value1;
                                                print '" id="';
                                            }
                                            if ($key1 == "uni_id"){
                                                print $value1;
                                                print '">';
                                                print '<div class="card">';
                                            }
                                            if ($key1 == "img"){
                                                print '<img src="';
                                                print $value1;
                                                print '" alt="';
                                            }
                                            if ($key1 == "alt"){
                                                print $value1;
                                                print '">';
                                                print '<div class="about-box" style="left: 0">';
                                                print '<div class="background-card"></div>';
                                                print '<div class="about-box__block">';
                                            }
                                            if ($key1 == "logo"){
                                                print '<img src="';
                                                print $value1;
                                                print '">';
                                                print "<h3>";
                                            }
                                            if ($key1 == "name"){
                                                print $value1;
                                                print "</h3>";
                                            }
                                            if ($key1 == "location"){
                                                print '<div class="location">';
                                                print '<img src="img/pin.svg" alt="location">';
                                                print '<p>';
                                                print $value1;
                                                print "</p>";
                                                print '</div>';
                                                print '</div>';
                                                print '</div>';
                                                print '</div>';
                                                print '</a>';
                                            }
    
                                        }
                                    }
                                    print '</div>';
                                } else {
                                    print "<p>Университетов по данному запросу не найдено. Попробуйте написать более точное название.</p>";
                                }
                               mysqli_close($conn);

                        }

                        
                    }

                ?>
            </div>
        </div>
    </section>
        

    <?php require_once('footer.php') ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>