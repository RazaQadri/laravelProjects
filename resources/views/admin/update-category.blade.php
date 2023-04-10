@include("/admin/header")

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="/admin/updateCatData" method ="POST">
                  @csrf
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="{{$row['category_id']}}" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="{{$row['category_name']}} " placeholder="" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>

@include('/admin/footer')

