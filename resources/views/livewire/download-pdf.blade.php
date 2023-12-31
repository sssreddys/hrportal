<style>
        /* Define the CSS styles for the box */
        .salary-slip{
      margin: 15px;
      .empDetail {
        width: 70%;
        margin-left:200px;
        text-align: left;
        border: 2px solid black;
        border-collapse: collapse;
        table-layout: fixed;
      }
      
      .head {
        margin: 10px;
        margin-bottom: 50px;
        width: 100%;
      }
      
      .companyName {
        text-align: right;
        font-size: 25px;
        font-weight: bold;
      }
      
      .salaryMonth {
        text-align: center;
      }
      
      .table-border-bottom {
        border-bottom: 1px solid;
      }
      
      .table-border-right {
        border-right: 1px solid;
      }
      
      .myBackground {
        padding-top: 10px;
        text-align: left;
        border: 1px solid black;
        height: 40px;
      }
      
      .myAlign {
        text-align: center;
        border-right: 1px solid black;
      }
      
      .myTotalBackground {
        padding-top: 10px;
        text-align: left;
        background-color: #EBF1DE;
        border-spacing: 0px;
      }
      
      .align-4 {
        width: 25%;
        float: left;
      }
      
      .tail {
        margin-top: 35px;
      }
      
      .align-2 {
        margin-top: 25px;
        width: 50%;
        float: left;
      }
      
      .border-center {
        text-align: center;
      }
      .border-center th, .border-center td {
        border: 1px solid black;
      }
      
      th, td {
        padding-left: 6px;
      }
}
    </style>



<div>
    @foreach($employees as $employee)
  <div class="salary-slip">
  <table class="empDetail">
  <tr height="100px" style='background-color: #c2d69b'>
                <td colspan='4'>
                  <img  src='https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/2e383f1a48f91dbea7e6' style="height:100px;width:200px" /></td>
                <td colspan='4' class="companyName" style="margin-left:100px;font-size:16px"> XSILICA SOFTWARE SOLUTIONS PVT LTD</td>
              </tr>
              <tr>
                <th>
                  Name
                </th>
                <td>
                {{$employee->first_name}} {{$employee->last_name}}
                 </td>
                <td>
                </td>
                <th>
                Bank Branch
                 </th>
                <td>
                {{$employee->bank_branch}}
                 </td>
                <td></td>
                <th>
                  Branch Name
              </th>
                <td>
                {{$employee->bank_name}}
      </td>
              </tr>
              <tr>
                <th>
                PF Number
                </th>
                <td>
                {{$employee->pf_no}}
                </td>
                <td></td>
                <th>
                  Bank Name
                 </th>
                <td>
                {{$employee->bank_name}}
                  </td>
                <td></td>
                <th>
                Bank Account Number
                </th>
                <td>
                {{$employee->account_number}}
      </td>
              </tr>
              <tr>
                <th>
                Father Name
      </th>
                <td>
                {{$employee->father_name}}
      </td><td></td>
                <th>
                  Bank Branch
      </th>
                <td>
                {{$employee->bank_branch}}
      </td><td></td>
                <th>
                  Pay Period
      </th>
                <td>
                  XXXXXXXXX
      </td>
              </tr>
              <tr>
                <th>
                Mobile
      </th>
                <td>
                {{$employee->mobile_number}}
      </td><td></td>
                <th>
                  Bank A/C no.
      </th>
                <td>
                {{$employee->account_number}}
      </td><td></td>
                <th>
                Address
      </th>
                <td>
                {{$employee->address}}
      </td>
              </tr>
              <tr>
                <th>
                  Grade:
      </th>
                <td>
                  18
      </td><td></td>
                <th>
                Designation
      </th>
                <td>
                {{$employee->job_title}}
      </td><td></td>
                <th>
                  PAN No:
      </th>
                <td>
                {{$employee->pan_no}}
      </td>
              </tr>
              <tr class="myBackground">
                <th colspan="2">
                  Payments
      </th>
                <th >
                  Particular
      </th>
                <th class="table-border-right">
                  Amount (Rs.)
      </th>
                <th colspan="2">
                  Deductions
      </th>
                <th >
                  Particular
      </th>
                <th >
                  Amount (Rs.)
      </th>
              </tr>
              <tr>
                <th colspan="2">
                  Basic Salary
      </th>
                <td></td>
                <td class="myAlign">
                16000
      </td>
                <th colspan="2" >
                  Provident Fund
      </th >
                <td></td>

                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <th colspan="2">
                  Fixed Dearness Allowance
      </th>
                <td></td>

                <td class="myAlign">
                  00.00
      </td>
                <th colspan="2" >
                  LIC
      </th >
                <td></td>

                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <th colspan="2">
                  Variable Dearness Allowance
      </th>
                <td></td>

                <td class="myAlign">
                  00.00
      </td>
                <th colspan="2" >
                  Loan
      </th >
                <td></td>

                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <th colspan="2">
                  House Rent Allowance
      </th>
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
                <th colspan="2" >
                  Professional Tax
      </th >
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <th colspan="2">
                  Graduation Allowance
      </th>
                <td></td>

                <td class="myAlign">
                  00.00
      </td>
                <th colspan="2" >
                  Security Deposite(SD)
      </th >
                <td></td>

                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <th colspan="2">
                  Conveyance Allowance
      </th> <td></td>
                <td class="myAlign">
                  00.00
      </td>
                <th colspan="2" >
                  Staff Benefit(SB)
      </th >
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <th colspan="2">
                  Post Allowance
      </th>
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
                <th colspan="2" >
                  Labour Welfare Fund
      </th >
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <th colspan="2">
                  Special Allowance
      </th>
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
                <th colspan="2" >
                  NSC
      </th >
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <td colspan="4" class="table-border-right"></td>
                <th colspan="2" >
                  Union Thanco Officer(UTO)
      </th >
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <td colspan="4" class="table-border-right"></td>
                <th colspan="2" >
                  Advance
      </th >
                <td></td>
                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <td colspan="4" class="table-border-right"></td>
                <th colspan="2" >
                  Income Tax
      </th > <td></td>
                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr class="myBackground">
                <th colspan="3">
                  Total Payments
      </th>
                <td class="myAlign">
                  10000
      </td>
                <th colspan="3" >
                  Total Deductions
      </th >
                <td class="myAlign">
                  1000
      </td>
              </tr >
              <tr height="40px">
                <th colspan="2">
                  Projection for Financial Year:
                </th>
                <th>
                </th>
                <td class="table-border-right">
                </td>
                <th colspan="2" class="table-border-bottom" >
                  Net Salary
                </th >
                <td >
                </td>
                <td >
                  XXXXXXXXX
                </td>
              </tr >
              <tr>
                <td colspan="2">
                  Gross Salary
                </td> <td></td>
                <td class="myAlign">
                  00.00
      </td><td colspan="4"></td>
              </tr >
              <tr>
                <td colspan="2">
                  Aggr. Dedu - P.Tax & Std Ded
      </td> <td></td>
                <td class="myAlign">
                  00.00
      </td>
                <th colspan="2" >
                  Cumulative
      </th >
                <td colspan="2"></td>
              </tr >
              <tr>
                <td colspan="2">
                  Gross Total Income
      </td> <td></td>
                <td class="myAlign">
                  00.00
      </td>
                <td colspan="2" >
                  Empl PF Contribution
      </td > <td></td>
                <td class="myAlign">
                  00.00
      </td>
              </tr >
              <tr>
                <td colspan="2">
                  Aggr of Chapter "PF"
      </td> <td></td>
                <td class="myAlign">
                  00.00
      </td><td colspan="4"></td>
              </tr >
              <tr>
                <td colspan="2">
                  Total Income
      </td> <td></td>
                <td class="myAlign">
                  00.00
      </td>
                <td colspan="4"></td>
              </tr >
              <tbody class="border-center">
                <tr>
                  <th>
                    Attend/ Absence
      </th>
                  <th>
                    Days in Month
      </th>
                  <th>
                    Days Paid
      </th>
                  <th>
                    Days Not Paid
      </th>
                  <th>
                    Leave Position
      </th>
                  <th>
                    Privilege Leave
      </th>
                  <th>
                    Sick Leave
      </th>
                  <th>
                    Casual Leave
      </th>
                </tr>
                <tr>
                  <td ></td>
                  <td ></td>
                  <td ></td>
                  <td ></td>
                  <td>Yrly Open Balance</td>
                  <td>0.0</td> <td>0.0</td>
                  <td>0.0</td>
                </tr >
                <tr>
                  <th >Current Month</th>
                  <td >31.0</td>
                  <td >31.0</td>
                  <td >31.0</td>
                  <td>Availed</td>
                  <td>0.0</td> <td>0.0</td>
                  <td>0.0</td>
                </tr >
                <tr>
                  <td colspan="4"></td>
                  <td>Closing Balance</td>
                  <td>0.0</td> <td>0.0</td>
                  <td>0.0</td>
                </tr >
                <tr>
                  <td colspan="4"> &nbsp; </td>
                  <td > </td>
                  <td > </td>
                  <td > </td>
                  <td > </td>
                </tr >
                <tr>
                  <td colspan="4"></td>
                  <td>Company Pool Leave Balance</td>
                  <td>1500</td>
                  <td ></td>
                  <td ></td>
                </tr >
                

</table>
</div>
   
    @endforeach
</div>