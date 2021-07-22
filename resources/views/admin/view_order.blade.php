@extends('admin_layout')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span4">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"> Customer Details</span>
            </h2>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($order_by_id as $v_order)
                    @endforeach
                        <td>{{$v_order->customer_name}}</td>
                        <td>{{$v_order->mobile_number}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="box span8">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"> Shipping Details</span>
            </h2>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                    <tr>
                        <th>Shipping First Name</th>
                        <th>Shipping Address</th>
                        <th>Shipping Mobile</th>
                        <th>Shipping Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($order_by_id as $v_order)
                    @endforeach
                        <td>{{$v_order->shipping_first_name}}</td>
                        <td>{{$v_order->shipping_address}}</td>
                        <td>{{$v_order->shipping_mobile_number}}</td>
                        <td>{{$v_order->shipping_email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>  

<div class="row-fluid sortable">    
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon align-justify"></i><span class="break"> Order Details</span>
            </h2>
        </div>
        <div class="box-content">
            <table class="table" table-striped>
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Sales Quantity</th>
                        <th>Product Total</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($order_by_id as $v_order)
                    <tr>
                        <td>{{$v_order->order_id}}</td>
                        <td>{{$v_order->product_name}}</td>
                        <td>{{$v_order->product_price}}</td>
                        <td>{{$v_order->product_sales_quantity}}</td>
                        <td>{{$v_order->product_price * $v_order->product_sales_quantity}}</td>
                    </tr>
                @endforeach    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"><strong>Total with VAT :</strong></td>
                        <td><strong>= {{$v_order->order_total}}</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection