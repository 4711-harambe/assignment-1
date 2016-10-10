<h1>Receiving Details</h1>

<div class="table-responsive">
    <table class="table" action="">
        <form action="">
            <tr>
                <th>Product ID</th>
                <td>{id}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{code}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{receivingCost}</td>
            </tr>
            <tr>
                <th>Stocking Unit</th>
                <td>{stockingUnit}</td>
            </tr>

                <th>Quantity In Stock</th>
                <td>{quantityOnHand}</td>
            </tr>
            <tr>
                <th>Update Quantity:</th>
                <td><input name={quantityOnHand} type="number"></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-primary" type="submit" value="Update Quantity">
                <td>
            </tr>
        </form>
    </table>
</div>
