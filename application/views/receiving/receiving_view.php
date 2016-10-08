<h1>Receiving</h1>
<div class="table-responsive">
    <table class="table" action="">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>In Stock</th>
        <th>Update Quantity</th>
        </thead>
        <form>
            {supplies}
            <tr>
                <td>
                    <a href="receiving/details_view/{id}">{id}</a>
                </td>
                <td>{code}</td>
                <td>{description}</td>
                <td>{receivingCost}</td>
                <td>{quantityOnHand}</td>
                <td><input name={quantityOnHand} type="number"></td>
            </tr>
            {/supplies}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><input class="btn btn-primary" type="submit" value="Update Quantity"></td>
            </tr>
        </form>
    </table>
</div>