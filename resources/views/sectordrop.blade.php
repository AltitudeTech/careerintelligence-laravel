<?php
    use App\Http\Controllers\Admin\SectorController;
    $sectors = new SectorController();
    $sector = $sectors->getAllSectors();
?>

@foreach ($sector as $sec)
    <li><a href="{{ route('sectordisplay', ['secId'=> $sec->id ]) }}">{{ $sec->name }}</a></li>
@endforeach