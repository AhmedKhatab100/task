
@extends('layouts.dashboard.app')

@section('content')
<style>
       
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 0 auto;
            background-color: #f2f2f2; 
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th:first-child, td:first-child {
            width: 30px; 
        }

        .quantity, .unit {
            width: 50px;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        .quantity, .unit, #orderTax, #orderDiscount {
            background-color: #fff; 
            border: 1px solid #ccc;
            padding: 5px;
            text-align: center;
        }

        #addRemoveRow {
          margin: 7px 0;
          margin-left: 206px;

        }

        #addRow, #removeRow {
            cursor: pointer;
            font-weight: bold;
            font-size: 20px;
            margin: 0 10px;
        }

        #addRow:hover, #removeRow:hover {
            color: #3498db;
        }

        #grandTotalRow {
            font-weight: bold;
        }

        .subtotal-total {
            font-weight: bold;
            font-size: 16px;
            text-align: right;
            margin-right: 205px;
            top: 165px;
            margin-left: 735px;
            margin-top: -23px;
   
        }
        .input{
          width: 67px; 
            height: 30px; 
            font-size: 14px; 
        }
        .genaralInput{
          margin-left: 214px;
        }
        .genralTable{

        }
    </style>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Sale</h4>
            <p class="card-description">
                Please enter information below
            </p>
            <hr>
            <form class="forms-sample" id="saleForm">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputName1">Date</label>
                    <input type="text" class="form-control" id="exampleInputName1" value="{{ date('Y-m-d H:i') }}">
                </div>
                <div class="form-group">
                    <select name="customer_id" class="form-control SlectBox">
                        <option value="" selected disabled>Select Customer</option>
                        @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="genralTable">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Quantity</th>
                                <th>Product Description</th>
                                <th>Unit</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td contenteditable="true" class="quantity" data-name="quantity">1</td>
                                <td contenteditable="true" data-name="description"></td>
                                <td contenteditable="true" class="unit" data-name="unit_price">0</td>
                                <td class="subtotal" data-name="subtotal">0.0</td>
                            </tr>
                        </tbody>
                    </table>


                        <div id="addRemoveRow">
                            <span id="addRow" onclick="addRow()">+</span>
                            <span id="removeRow" onclick="removeRow()">-</span>
                        </div>

                        <div class="genaralInput">
                            Order Discount : <input type="text" name="discount" class="input" id="orderDiscount" value="0.0" oninput="calculateTotal()" />
                            Order Tax : <input value="14" type="text" class="input" id="orderTax" value="0.0" oninput="calculateTotal()" />
                        </div>

                        <div class="subtotal-total">
                        Grand Total : <span name="grand_total" id="grandTotal">0.0</span>
                        </div>
                    </div>


                      <div class="form-group">
                          
                        <textarea wire:model="notes" name="notes" class="form-control" rows="5" placeholder="please add notes(if any)"></textarea>
                      </div>
                            
                      <button type="submit" class="btn btn-primary mr-2" id="save_sale">Add Sale</button>
                
                    </form>
                  </div>
                </div>
              </div>

              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
              var currentNO = 1;

              function calculateTotal() {
                  var sum = 0;
                  document.querySelectorAll("tbody tr").forEach(function(row) {
                      var quantity = parseFloat(row.querySelector(".quantity").textContent) || 0;
                      var unit = parseFloat(row.querySelector(".unit").textContent) || 0;
                      var subtotal = (quantity * unit).toFixed(2);
                      row.querySelector(".subtotal").textContent = subtotal;
                      sum += parseFloat(subtotal);
                  });

                  var orderTax = parseFloat(document.getElementById("orderTax").value) || 0;
                  var orderDiscount = parseFloat(document.getElementById("orderDiscount").value) || 0;

                  // حساب المجموع النهائي بالضريبة والخصم
                  var grandTotal = sum + (sum*orderTax/100) - orderDiscount;
                  

                  document.getElementById("grandTotal").textContent = grandTotal.toFixed(2);
              }

              document.querySelectorAll("tbody tr td.quantity, tbody tr td.unit").forEach(function(cell) {
                  cell.addEventListener("input", function() {
                      calculateTotal();
                  });
              });

              // إضافة صف جديد
              function addRow() {
                  currentNO++;
                  var row = document.querySelector("tbody tr");
                  var newRow = row.cloneNode(true);
                  newRow.querySelector(".quantity").textContent = "1";
                  newRow.querySelector(".unit").textContent = "0";
                  newRow.querySelector(".subtotal").textContent = "0.00";
                  newRow.querySelector("td:first-child").textContent = currentNO;
                  row.parentElement.appendChild(newRow);

                  
                  newRow.querySelectorAll("td.quantity, td.unit").forEach(function(cell) {
                      cell.addEventListener("input", function() {
                          calculateTotal();
                      });
                  });

                  calculateTotal();
              }

              // حذف صف
              function removeRow() {
                  var rows = document.querySelectorAll("tbody tr");
                  if (rows.length > 1) {
                      var lastRow = rows[rows.length - 1];
                      lastRow.parentElement.removeChild(lastRow);
                      calculateTotal();
                  }
              }

              calculateTotal();
              e.preventDefault();

var saleData = {
    customer_id: $("select[name='customer_id']").val(),
    date: $("#exampleInputName1").val(),
    notes: $("textarea[name='notes']").val(),
    items: []
};

$("tbody tr").each(function() {
    var item = {
        quantity: $(this).find("[data-name='quantity']").text(),
        description: $(this).find("[data-name='description']").text(),
        unit_price: $(this).find("[data-name='unit_price']").text(),
        subtotal: $(this).find("[data-name='subtotal']").text()
    };
    saleData.items.push(item);
});
              $("#save_sale").click(function () {
            var formData = $("#saleForm").serialize(); // جمع بيانات النموذج

            $.ajax({
                type: "POST",
                url: "{{ route('sales.store') }}", // استبدل بمسار حفظ البيانات في الخادم
                data: JSON.stringify(saleData),
                contentType: "application/json",
                success: function (data) {
                    alert("Sale added successfully!");
                },
                error: function () {
                    alert("Error adding sale.");
                },
            });
        });

        </script>
@endsection