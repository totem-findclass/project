<?php include 'header.php' ?>

    <main style="text-align:center">
        <form id="sub" action="quadroDeHorario.php" >
            <h2>Digite a sua matrícula</h2>
            <fieldset>
                <label>Matrícula: </label>
                <input id="login" class="textbox" name="matricula"  type="text" required>
            </fieldset>

          <table>
              <tr>
                <td><input class="botao" type="button" value="1" onclick="Senha(this.value)" /></td>
                <td><input class="botao" type="button" value="2" onclick="Senha(this.value)" /></td>
                <td><input class="botao" type="button" value="3" onclick="Senha(this.value)" /></td>
              </tr>

              <tr>
                <td><input class="botao" type="button" value="4" onclick="Senha(this.value)" /></td>
                <td><input class="botao" type="button" value="5" onclick="Senha(this.value)" /></td>
                <td><input class="botao" type="button" value="6" onclick="Senha(this.value)" /></td>
              </tr>

              <tr>
                <td><input class="botao" type="button" value="7" onclick="Senha(this.value)" /></td>
                <td><input class="botao" type="button" value="8" onclick="Senha(this.value)" /></td>
                <td><input class="botao" type="button" value="9" onclick="Senha(this.value)" /></td>
              </tr>

              <tr>
                <td><input class="botao" type="button" value="Limpar" onclick="Limpa()" /></td>
                <td><input class="botao" type="button" value="0" onclick="Senha(this.value)" /></td>
                <td><input class="botao" type="submit" value="Entrar"/></td>
              </tr>

          </table>
        </form>

    </main>
</body>
</html>