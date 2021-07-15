<?php
// error_reporting(0);
	abstract class DB{		
		public function Conn(){
			return mysqli_connect('localhost' , 'nurd' , '171119' , 'uniledge_uni');
		}
		public function mysql(){
			return new mysqli('localhost' , 'nurd' , '171119' , 'uniledge_uni');
		}
	}
$filter = new Filter();
$filter->check();

class Filter extends DB{
    private $text1;

    public function __construct() {
        $this->text1 = isset($_POST['valueee']) ? $_POST['valueee'] : null;
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
		
            $sql = "SELECT DISTINCT universities.href, universities.uni_id, universities.img, universities.alt, universities.logo, universities.name, universities.location
			FROM universities
			INNER JOIN op 
			ON universities.uni_id = op.uni_id
			INNER JOIN univer 
			ON op.gop_id = univer.gop_id
			WHERE univer.gop_name = '$text'";


			$result = mysqli_query($conn,$sql);
			$print = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
						print '<div class="about-box">';
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
		mysqli_close($conn);

    }

    
}