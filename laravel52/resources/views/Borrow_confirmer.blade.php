@extends('layouts.app')

@section('content')
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Image
                            </th>
                            <th>
                                Produit
                            </th>
                            <th>
                                Date d'emprunt
                            </th>
                            <th>
                                Date de retour
                            </th>
                            <th>
                                Confirmer
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td>
                                <img class="img-product" src="image\example1.jpg" height="40" width="40" alt="Photo perdue">
                            </td>
                            <td>
                                {{$object -> name}}
                            </td>
                            <td>
                                <?php $start_date = time(); echo date('m/d/Y');?>
                            </td>
                            {!! Form::open(['route' => ['add_borrow', 'object_id' => $object -> object_id, 'start_date' => $start_date]]) !!}
                                <td>
                                    <select name="Day">
                                          <option selected value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                          <option value="15">15</option>
                                          <option value="16">16</option>
                                          <option value="17">17</option>
                                          <option value="18">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                          <option value="21">21</option>
                                          <option value="22">22</option>
                                          <option value="23">23</option>
                                          <option value="24">24</option>
                                          <option value="25">25</option>
                                          <option value="26">26</option>
                                          <option value="27">27</option>
                                          <option value="28">28</option>
                                          <option value="29">29</option>
                                          <option value="30">30</option>
                                          <option value="31">31</option>
                                    </select>
                                    <select name="Month">
                                          <option selected value="1">Janvier</option>
                                          <option value="2">Février</option>
                                          <option value="3">Mars</option>
                                          <option value="4">Avril</option>
                                          <option value="5">Mai</option>
                                          <option value="6">Juin</option>
                                          <option value="7">Juillet</option>
                                          <option value="8">Août</option>
                                          <option value="9">Septembre</option>
                                          <option value="10">Octobre</option>
                                          <option value="11">Novembre</option>
                                          <option value="12">Décembre</option>
                                    </select>
                                    <select name="Year">
                                      <option selected value="16">2016</option>
                                      <option value="17">2017</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="text-left">
                                        {!! Form::submit('Borrow it',['class'=>'btn btn-success']) !!}
                                    </div>
                                </td>
                            {!! Form::close() !!}
                        </tr>
                    </tbody>
			    </table>
		    </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
@endsection