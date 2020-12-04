/**
 * @see Class responsável por gerar sequencias de valores de acordo com alguma lógica
 * @author Rafael Santos
*/
class Sequencia {

	private $limit = 233; // set default limit

	/**
	 * @see Responsávelpor montar a sequencia de Fibonacci [https://planetabiologia.com/a-sequencia-de-fibonacci-na-natureza/]
	 * @param [Int] $limit , limit da sequencia que deseja
	*/
	public function fibonacci($limit=null) {

		if (is_null($limit))
			$limit = $this->limit;

		$number = array(0,1);

		do {
			$number[] = end($number)+$number[count($number)-2];
		} while(end($number)!=$limit);


		return $number;
	}

}

$sequencia = new Sequencia();
$numbers = $sequencia->fibonacci(89);
foreach ($numbers as $key => $value) {
	echo $value . " ";
}
