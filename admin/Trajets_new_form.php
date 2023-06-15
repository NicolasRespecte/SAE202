<?php require '../debut2.php'; require_once '../lib.inc.php';?>
<?php require 'header-admin.php'; ?>

<h1>Gestion des Trajets</h1>
<p>Ajouter un trajet ici</p>
<hr>
<div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Point de départ</label>
                    <input type="text" name="pdepart" placeholder="Point de départ" required="" />
                <span class="ligne"></span>
            </div>
            <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Point de arrivée</label>
                    <input type="text" name="parrivee" placeholder="Point de arrivée" required="" />
                <span class="ligne"></span>
            </div>

<div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Ville de départ</label>
                    <input type="text" name="depart" placeholder="Ville de départ" required="" />
                <span class="ligne"></span>
            </div>

            <div class="champ">
                <label for="arrive">Ville d'arrivée</label>
                    <input type="text" name="arrive" placeholder="Ville d'arrivée" required="" />
                <span class="ligne"></span>
            </div>
        </div>

        <div class="Champsaccuiel">
            <div class="champ">
                <label for="datedepart">Date de départ</label>
                    <input type="date" name="datedepart" placeholder="Date de départ" required="" />
                <span class="ligne"></span>
            </div>
        </div>

        <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Heure de départ</label>
                    <input type="text" name="hdepart" placeholder="Heure de départ" required="" />
                <span class="ligne"></span>
            </div>
            <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Heure d'arrivée</label>
                    <input type="text" name="harrivee" placeholder="Heure d'arrivée" required="" />
                <span class="ligne"></span>
            </div>
            <div class="Champsaccuiel">
            <div class="champ">
                <label for="depart">Prix</label>
                    <input type="text" name="prix" placeholder="Prix" required="" />
                <span class="ligne"></span>
            </div>
        <div class="Champsaccuiel">
            <div class="champ">
                <label for="personne">Passagers</label>
                    <input type="number" name="personne" step="1" min="1" max="4" placeholder="Passagers" required="" />
                <span class="ligne"></span>
            </div>
        </div>
</form>
</select>
<br>
    <input type="submit" name="ajouter">
</form>

   <?php
		$mabd = connexionBD();
		$req = "SELECT * FROM  Trajet ";
?>
</tbody>
</table>
</body>
</html>