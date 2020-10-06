<form action="P1_A11_Controller.php" method="get" class="form">
    <div id="medida3">
        <input type="number" name="volNum1" id="" value="1" min="0" step="0.01" />
        <select id="" name="volumenes" class="select">
            <optgroup label="Litros">
                <option value="L-Ml" class="option">Litros-Mililitros</option>
                <option value="L-M3" class="option">Litros-Metros Cúbicos</option>
            </optgroup>

            <optgroup label="Mililitros">
                <option value="Ml-L" class="option">Mililitros-Litros</option>
                <option value="Ml-M3" class="option">Mililitros-Metros Cúbicos</option>
            </optgroup>

            <optgroup label="Metros Cúbicos">
                <option value="M3-L" class="option">Metros Cúbicos-Litros</option>
                <option value="M3-Ml" class="option">Metros Cúbicos-Mililitros</option>
            </optgroup>
        </select>
    </div>
    <br>
    <button type="submit" name="calcularVolumenes">Calcular</button>
    <button type="submit" name="limpiarV">Reiniciar</button>
</form>