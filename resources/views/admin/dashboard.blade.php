@extends('admin_layout');
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        
    <h3 style="color: teal;">Chào bạn đến với trang admin</h3>
    <table style="width: 600px; height: 200px;">
        <tr style="color: red;">
            <th>Tổng số sản phẩm</th>
            <th>Áo khoác</th>
            <th>Áo sơ mi</th>
            <th>Áo thun</th>
            <th>Quần jean</th>


            
        </tr>
            <?php $tong=0;
            ?>
            @foreach($tongquan as $key=>$value)
            <?php 
            $tong=$tong +$value->product_quantity ;
            ?>
            @endforeach  
        <tr>           
            <td style="width: 60px; height: 60px; border-radius: 40%; background-color: #008081; text-align: center;">{{$tong}}</td> 
            <?php $tong1=0;
            ?>  
        </tr>

        
    </table>
    </div>
</div>

@endsection


<!-- <div id="card-stats" class="pt-0">
      <div class="row">
         <div class="col s12 m6 l3">
            <div class="card animate fadeLeft">
               <div class="card-content cyan white-text">
                  <p class="card-stats-title"><i class="material-icons">person_outline</i> New Clients</p>
                  <h4 class="card-stats-number white-text">566</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 15%
                     <span class="cyan text text-lighten-5">from yesterday</span>
                  </p>
               </div>
               <div class="card-action cyan darken-1">
                  <div id="clients-bar" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeLeft">
               <div class="card-content red accent-2 white-text">
                  <p class="card-stats-title"><i class="material-icons">attach_money</i>Total Sales</p>
                  <h4 class="card-stats-number white-text">$8990.63</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 70% <span class="red-text text-lighten-5">last
                        month</span>
                  </p>
               </div>
               <div class="card-action red">
                  <div id="sales-compositebar" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeRight">
               <div class="card-content orange lighten-1 white-text">
                  <p class="card-stats-title"><i class="material-icons">trending_up</i> Today Profit</p>
                  <h4 class="card-stats-number white-text">$806.52</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 80%
                     <span class="orange-text text-lighten-5">from yesterday</span>
                  </p>
               </div>
               <div class="card-action orange">
                  <div id="profit-tristate" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeRight">
               <div class="card-content green lighten-1 white-text">
                  <p class="card-stats-title"><i class="material-icons">content_copy</i> New Invoice</p>
                  <h4 class="card-stats-number white-text">1806</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_down</i> 3%
                     <span class="green-text text-lighten-5">from last month</span>
                  </p>
               </div>
               <div class="card-action green">
                  <div id="invoice-line" class="center-align"></div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!--card stats end-->
   <!--chart dashboard start-->
  <!-- <div id="chart-dashboard">
      <div class="row">
         <div class="col s12 m8 l8">
            <div class="card animate fadeUp">
               <div class="card-move-up waves-effect waves-block waves-light">
                  <div class="move-up cyan darken-1">
                     <div>
                        <span class="chart-title white-text">Revenue</span>
                        <div class="chart-revenue cyan darken-2 white-text">
                           <p class="chart-revenue-total">$4,500.85</p>
                           <p class="chart-revenue-per"><i class="material-icons">arrow_drop_up</i> 21.80 %</p>
                        </div>
                        <div class="switch chart-revenue-switch right">
                           <label class="cyan-text text-lighten-5">
                              Month <input type="checkbox"> <span class="lever"></span> Year
                           </label>
                        </div>
                     </div>
                     <div class="trending-line-chart-wrapper"><canvas id="revenue-line-chart" height="70"></canvas>
                     </div>
                  </div>
               </div>
               <div class="card-content">
                  <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons activator">filter_list</i>
                  </a>
                  <div class="col s12 m3 l3">
                     <div id="doughnut-chart-wrapper">
                        <canvas id="doughnut-chart" height="200"></canvas>
                        <div class="doughnut-chart-status">
                           <p class="center-align font-weight-600 mt-4">4500</p>
                           <p class="ultra-small center-align">Sold</p>
                        </div>
                     </div>
                  </div>
                  <div class="col s12 m2 l2">
                     <ul class="doughnut-chart-legend">
                        <li class="mobile ultra-small"><span class="legend-color"></span>Mobile</li>
                        <li class="kitchen ultra-small"><span class="legend-color"></span> Kitchen</li>
                        <li class="home ultra-small"><span class="legend-color"></span> Home</li>
                     </ul>
                  </div>
                  <div class="col s12 m5 l6">
                     <div class="trending-bar-chart-wrapper"><canvas id="trending-bar-chart" height="90"></canvas></div>
                  </div>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Revenue by Month <i class="material-icons right">close</i>
                  </span>
                  <table class="responsive-table">
                     <thead>
                        <tr>
                           <th data-field="id">ID</th>
                           <th data-field="month">Month</th>
                           <th data-field="item-sold">Item Sold</th>
                           <th data-field="item-price">Item Price</th>
                           <th data-field="total-profit">Total Profit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>January</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>February</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="col s12 m4 l4">
            <div class="card animate fadeUp">
               <div class="card-move-up teal accent-4 waves-effect waves-block waves-light">
                  <div class="move-up">
                     <p class="margin white-text">Browser Stats</p>
                     <canvas id="trending-radar-chart" height="114"></canvas>
                  </div>
               </div>
               <div class="card-content  teal">
                  <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons activator">done</i>
                  </a>
                  <div class="line-chart-wrapper">
                     <p class="margin white-text">Revenue by country</p>
                     <canvas id="line-chart" height="114"></canvas>
                  </div>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Revenue by country <i class="material-icons right">close</i>
                  </span>
                  <table class="responsive-table">
                     <thead>
                        <tr>
                           <th data-field="country-name">Country Name</th>
                           <th data-field="item-sold">Item Sold</th>
                           <th data-field="total-profit">Total Profit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>USA</td>
                           <td>65</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>UK</td>
                           <td>76</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>Canada</td>
                           <td>65</td>
                           <td>$452.55</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div> -->