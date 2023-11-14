<div class="modal-dialog modal-dialog-centered modal-xl">
   <div class="modal-content">

      <div class="modal-header border-0 pb-0">
         <div class="form-header modal-header-title text-start mb-0">
            <h6 class="mb-0">Add Billing</h6>
         </div>
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-center" aria-hidden="true">&times;</span>
         </button>
      </div>
      <form autocomplete="off" method="POST" action="{{ route('billing.store') }}">
      @csrf
      <div class="modal-body">
         <div class="row">
               <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                     <label>Date<span class="text-danger">*</span></label>
                     <input type="date" class="form-control"  name="date" id="date" value="{{$today}}">
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                     <label>Customer <span class="text-danger">*</span></label>
                     <select class="form-control select customer_id js-example-basic-single" name="customer_id" id="customer_id" required>
                           <option value="" disabled selected hiddden>Select Customer</option>
                              @foreach ($customer as $customers)
                              <option value="{{ $customers->id }}">{{ $customers->name }} </option>
                              @endforeach
                      </select>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                     <label>Product<span class="text-danger">*</span></label>
                     <select class="form-control select product_id js-example-basic-single" name="product_id" id="product_id" required>
                           <option value="" disabled selected hiddden>Select Product</option>
                              @foreach ($product as $products)
                              <option value="{{ $products->id }}">{{ $products->name }} </option>
                              @endforeach
                      </select>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                     <label>Employee</label>
                     <select class="form-control select  js-example-basic-single" name="employee_id" id="employee_id" required>
                           <option value="" disabled selected hiddden>Select Employee</option>
                              @foreach ($employee as $employees)
                              <option value="{{ $employees->id }}">{{ $employees->name }} </option>
                              @endforeach
                      </select>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                     <label>Starting Date<span class="text-danger">*</span></label>
                     <input type="date" class="form-control"  name="starting_date" id="starting_date" required>
                  </div>
               </div>
               
               <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                     <label>Ending Date<span class="text-danger">*</span></label>
                     <input type="date" class="form-control"  name="ending_date" id="ending_date" required>
                  </div>
               </div>
               
               <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                     <label>Remainder Date<span class="text-danger">*</span></label>
                     <input type="date" class="form-control"  name="remainder_date" id="remainder_date" required>
                  </div>
               </div>
         </div>
      </div>

      <div class="modal-footer">
         <button type="submit" class="btn btn-primary" style="margin-right: 5px;">Save</button>
         <button type="button" class="btn btn-cancel btn-danger" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
      </div>
      </form>
   </div>
</div>
