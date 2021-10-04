<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <img src="Aristoteles.png" alt="sabio">
</head>
<body>
    <p>
    Toda e qualquer fonte de movimento no mundo, seja uma pessoa, seja uma coisa, seja um
pensamento, é um “motor movido”. Dessa sorte, o arado move a terra, a mão move o arado, o
cérebro move a mão, o desejo de alimento move o cérebro, o instinto da vida move o desejo
de alimento, e assim por diante. Em outras palavras, a causa de todo movimento é o resultado
de outro movimento qualquer, o amo de todo escravo é escravo de algum outro amo. O
próprio tirano é escravo de sua ambição. Deus, no entanto, não pode ser resultado de nenhuma
ação. Não pode ser escravo de amo nenhum. É a fonte de toda a ação, o amo de todos os
amos, o instigador de todo o pensamento, o “motor não movido do mundo”.
                                                        Aristóteles.
    </p>
    <h1>Formulário de Teste da Faculdade</h1>
    <p><b> Escreva aqui suas informações: </b></p>
    <form action="" method="POST">
        
        Nome: <div><input type="text" id="n" name="nome"></div>
        E-mail:<div><input type="email" name="email" id="email"></div>
        Senha:<div><input type="password" name="senha" id="senha"></div><br>
        Mensagem: <textarea name="Mensagem" id="Msg" cols="20" rows="2"></textarea>
        <div><input type="submit" value="Enviar"></div>
        <br><br>
    <fieldset>
        <div>
            Em qual Faculdade você estuda? <input type="radio" name="faculdade" value="Fic">FIC
            <input type="radio" name="faculdade" value="Fic">FIC
            <input type="radio" name="faculdade" value="Fic">FANOR
            <input type="radio" name="faculdade" value="Fic">UNINASSAU
            <input type="radio" name="faculdade" value="Fic">UNIFOR
            <input type="radio" name="faculdade" value="Fic">UFC
            <input type="radio" name="faculdade" value="Fic">UECE
        </div>
    </fieldset>    
            <br><br>
        <div>
            <label>Disciplina:</label><br>
            <select id="Materia">
                <option selected disabled value="">Selecione</option>
                <option>HTML e CSS3</option>
                <option>Banco de Dados</option>
                <option>Sistemas Operacionais</option>
                <option>Segurança Cibernética</option>
                <option>Java</option>
            </select>
        </div>

    </form>
</body>
</html>
