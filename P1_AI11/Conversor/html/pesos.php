<form action="P1_A11_Controller.php" method="get" class="form">
    <div id="medida2">
        <input type="number" name="pesoNum1" id="" value="1" min="0" step="0.01" />
        <select id="" name="pesos" class="select">
            <optgroup label="Gramos">
                <option value="G-Kg" class="option">Gramos-Kilogramos</option>
                <option value="G-Oz" class="option">Gramos-Onzas</option>
            </optgroup>

            <optgroup label="Kilogramos">
                <option value="Kg-G" class="option">Kilogramos-Gramos</option>
                <option value="Kg-Oz" class="option">Kilogramos-Onzas</option>
            </optgroup>

            <optgroup label="Onzas">
                <option value="Oz-G" class="option">Onzas-Gramos</option>
                <option value="Oz-Kg" class="option">Onzas-Kilogramos</option>
            </optgroup>
        </select>
    </div>
    <br>
    <button type="submit" name="calcularPesos">Calcular</button>
    <button type="submit" name="limpiarP">Reiniciar</button>
</form>