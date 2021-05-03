$fechaActual =  strtotime(getCurrentDate());
$fechaMin =  strtotime("-1 days", $fechaActual);
$fechaMax =  strtotime("+1 days", $fechaActual);

@@minDate = date('Y-m-d', $fechaMin);
@@maxDate = date('Y-m-d', $fechaMax);
@@defaultDate = getCurrentDate();
