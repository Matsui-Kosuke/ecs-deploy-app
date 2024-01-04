<form action="{{ url('/s3')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" id="file" name="file" class="form-control">
    <button type="submit">送信</button>
</form>
