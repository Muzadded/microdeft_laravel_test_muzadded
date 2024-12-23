<div>
<!-- `id`, `name`, `phone`, `email`, asset_id[FK]’, `designation`, ‘created_at’, `updated_at`].  -->
    <form action="{{url('add')}}" method="post">
        <label for="id">ID</label>
        <input type="text" name="id">
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="phone">Phone</label>
        <input type="text" name="phone"> 
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="email">Asset</label>
        <input type="text" name="asset">
        <label for="email">Designation</label>
        <input type="text" name="des">
        <input type="submit" value="Submit">
    </form>
</div>
