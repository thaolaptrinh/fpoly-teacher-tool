<div class="card">
  <div class="card-body py-4">
    <form method="get" action="">
      <div class="row mb-10">
        <div class="col-lg-6">
          <label class="required fs-6 fw-semibold form-label mb-2 badge badge-light-success">Lựa chọn lớp học để hiện thị chi tiết lịch học</label>
          <div class="row fv-row">
            <select name="lop" id="lop" onchange="this.form.submit();" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Lớp học">
              <option></option>
              <?php
              if (isset($this->model_home->data['lop_hoc']) && !empty($this->model_home->data['lop_hoc'])) {
                $lop_hoc = $this->model_home->data['lop_hoc'];
                foreach ($lop_hoc as $row) { ?>
                  <option value="<?= $row['ten_lop'] ?>" <?= (isset($_GET['lop'])  && $_GET['lop'] == $row['ten_lop'])  ? 'selected="selected"' : false  ?>><?= $row['ten_lop'] ?></option>
                <?php }
              } else { ?>
                <option value="">Không có dữ liệu</option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="col-lg-6">
          <label class="required fs-6 fw-semibold form-label mb-2 badge badge-light-success">Lựa chọn môn học để hiện thị chi tiết lịch học</label>
          <div class="row fv-row">
            <select name="mon" id="mon" onchange="this.form.submit();" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Môn học">
              <option></option>
              <?php
              if (isset($this->model_home->data['mon_hoc']) && !empty($this->model_home->data['mon_hoc'])) {
                $mon_hoc = $this->model_home->data['mon_hoc'];
                foreach ($mon_hoc as $row) { ?>
                  <option value="<?= $row['ma_mon'] ?>" <?= (isset($_GET['mon'])  && $_GET['mon'] == $row['ma_mon'])  ? 'selected="selected"' : false  ?>><?= $row['ma_mon'] ?></option>
                <?php }
              } else { ?>
                <option value="">Không có dữ liệu</option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>

    </form>

  </div>


</div>

<br>


<div class="card card-flush">
  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
    <div class="card-title">
      <div class="d-flex align-items-center position-relative my-1">
        <span class="svg-icon svg-icon-1 position-absolute ms-4">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
          </svg>
        </span>
        <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
      </div>
    </div>
    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
      <div class="w-100 mw-150px">
        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
          <option></option>
          <option value="all">All</option>
          <option value="published">Published</option>
          <option value="scheduled">Scheduled</option>
          <option value="inactive">Inactive</option>
        </select>
      </div>
      <a href="/keen/demo9/../demo9/apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add Product</a>
    </div>
  </div>
  <div class="card-body pt-0">
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
      <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
          <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
              <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
            </div>
          </th>
          <th class="min-w-200px">Product</th>
          <th class="text-end min-w-100px">SKU</th>
          <th class="text-end min-w-70px">Qty</th>
          <th class="text-end min-w-100px">Price</th>
          <th class="text-end min-w-100px">Rating</th>
          <th class="text-end min-w-100px">Status</th>
          <th class="text-end min-w-70px">Actions</th>
        </tr>
      </thead>

      <tbody class="fw-semibold text-gray-600">

        <tr>
          <td>
            <div class="form-check form-check-sm form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="1" />
            </div>
          </td>
          <td>
            <div class="d-flex align-items-center">
              <a href="/keen/demo9/../demo9/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                <span class="symbol-label" style="background-image:url(/keen/demo9/assets/media//stock/ecommerce/12.gif);"></span>
              </a>
              <div class="ms-5">
                <a href="/keen/demo9/../demo9/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
              </div>
            </div>
          </td>
          <td class="text-end pe-0">
            <span class="fw-bold">02614007</span>
          </td>
          <td class="text-end pe-0" data-order="41">
            <span class="fw-bold ms-3">41</span>
          </td>
          <td class="text-end pe-0">161</td>
          <td class="text-end pe-0" data-order="rating-5">
            <div class="rating justify-content-end">
              <div class="rating-label checked">
                <span class="svg-icon svg-icon-2">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
                  </svg>
                </span>
              </div>
              <div class="rating-label checked">
                <span class="svg-icon svg-icon-2">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
                  </svg>
                </span>
              </div>
              <div class="rating-label checked">
                <span class="svg-icon svg-icon-2">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
                  </svg>
                </span>
              </div>
              <div class="rating-label checked">
                <span class="svg-icon svg-icon-2">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
                  </svg>
                </span>
              </div>
              <div class="rating-label checked">
                <span class="svg-icon svg-icon-2">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="currentColor" />
                  </svg>
                </span>
              </div>
            </div>
          </td>
          <td class="text-end pe-0" data-order="Scheduled">
            <div class="badge badge-light-primary">Scheduled</div>
          </td>
          <td class="text-end">
            <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
              <span class="svg-icon svg-icon-5 m-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                </svg>
              </span>
            </a>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
              <div class="menu-item px-3">
                <a href="/keen/demo9/../demo9/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
              </div>
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
              </div>
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>