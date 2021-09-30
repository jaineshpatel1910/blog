
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Created By</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->created_by }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='/category'> Click Here</a> to go back
        </div> 
    </div>
</div>