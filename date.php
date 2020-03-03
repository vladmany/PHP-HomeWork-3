<?
class DateFunctionsClass{
    private $date1 = '';
    private $date2 = '';

    /**
     * конструктор класса
     * @param $date1
     * @param $date2
     */
    function __construct(string $date1 = '', string $date2 = '')
    {
        $this->setDate1($date1);
        $this->setDate2($date2);
    }

    /**
     * установка первой даты
     * @param string $date1
     */
    public function setDate1(string $date1 = '')
    {
        $this->date1 = $date1;
    }

    /**
     * установка второй даты
     * @param string $date2
     */
    public function setDate2(string $date2 = '')
    {
        $this->date2 = $date2;
    }

    /**
     * дата в формате '2020-02-02' преобразовуется в timestamp
     * @param $date
     * @return int
     */
    public function getDateInTimestamp(string $date = ''):int
    {
        $date = ($date != '') ? $date : $this->date1;

        return strtotime($date);
    }

    /**
     * получение разницы двух дат
     * @param $date1
     * @param $date2
     * @return int
     */
    public function getDifferentDate($date1 = '', $date2 = ''):int
    {
        $date1 = ($date1 != '') ? $date1 : $this->date1;
        $date2 = ($date2 != '') ? $date2 : $this->date2;

        return floor(abs(strtotime($date1) - strtotime($date2)) / (60*60*24));
    }

    /**
     * определение является ли дата рабочим днем
     * @param $date
     * @return bool
     */
    public function isWorkDate($date = ''):bool
    {
        $date = ($date != '') ? $date : $this->date1;

        return (date('w',strtotime($date)) != 6 && date('w',strtotime($date)) != 0) ? true : false;
    }

    /**
     * функция возвращает словами день недели
     * @param string $date
     * @return string
     */
    public function getNameDayOfWeek($date = ''):string
    {
        $date = ($date != '') ? $date : $this->date1;
        $daysOfWeek = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница','Суббота'];

        return $daysOfWeek[date('w', strtotime($date))];
    }


}
