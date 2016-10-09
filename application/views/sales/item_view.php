<h1>{code}</h1>

<div class="table-responsive">
    <table class="table" action="">
        <form action="">
            <tr>
                <th>Description</th>
                <td>{description}</td>
            </tr>
            <tr>
                <th>Ingredients (Amount needed)</th>
                <td>
                    <ul>
                        <?php foreach ($ingredients as $ingredient) {
                        echo '<li>' . $ingredient['ingredient'] . ' (' . $ingredient["amount"] . ')</li>';
                        } ?>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{sellingPrice}</td>
            </tr>
            <tr>
                <th>Quantity In Stock</th>
                <td>{quantityOnHand}</td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-primary" type="submit" value="Buy">
                <td>
            </tr>
        </form>
    </table>
</div>
