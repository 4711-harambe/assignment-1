<h1>Sales</h1>
<div class="table-responsive">
    <table class="table" action="">
        <thead>
        <th>Item</th>
        <th>Description</th>
        <th>Price</th>
        <th>In Stock</th>
        <th>Buy</th>
        </thead>
        <form>
            {stock}
            <tr>
                <td>
                    <a href="sales/item_view/{code}">{code}</a>
                </td>
                <td>{description}</td>
                <td>${sellingPrice}</td>
                <td>{quantityOnHand}</td>
                <td><input class="btn btn-primary" type="submit" value="Buy"></td>
            </tr>
            {/stock}
        </form>
    </table>
</div>    