<form action="P1_A11_Controller.php" method="get" class="form">
    <div id="medida1">
        <div id="number-picker"></div>
        <input type="number" name="longNum1" id="" value="1" min="0" step="0.01" />
        <select id="" name="longitudes" class="select">
            <optgroup label="Centímetros">
                <option value="cm-m" class="option">Centímetros-Metros</option>
                <option value="cm-inch" class="option">Centímetros-Pulgadas</option>
                <option value="cm-yd" class="option">Centímetros-Yardas</option>
            </optgroup>

            <optgroup label="Metros">
                <option value="m-cm" class="option">Metros-Centímetros</option>
                <option value="m-inch" class="option">Metros-Pulgadas</option>
                <option value="m-yd" class="option">Metros-Yardas</option>
            </optgroup>

            <optgroup label="Pulgadas">
                <option value="inch-cm" class="option">Pulgadas-Centímetros</option>
                <option value="inch-m" class="option">Pulgadas-Metros</option>
                <option value="inch-yd" class="option">Pulgadas-Yardas</option>
            </optgroup>

            <optgroup label="Yardas">
                <option value="yd-cm" class="option">Yardas-Centímetros</option>
                <option value="yd-m" class="option">Yardas-Metros</option>
                <option value="yd-inch" class="option">Yardas-Pulgadas</option>
            </optgroup>
        </select>
    </div>
    <br>
    <button type="submit" name="calcular">Calcular </button>
    <button type="submit" name="limpiarL">Reiniciar</button>
</form>