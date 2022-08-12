import mysql.connector

def criar_conexao(host, usuario, senha, banco):
    return mysql.connector.connect(host=host, user=usuario, password=senha, database=banco)


def fechar_conexao(con):
    return con.close()

def insere_usuario(con, nome, email, senha):
    cursor = con.cursor()
    sql = "INSERT INTO tb_users (name, email, password) values (%s, %s, %s)"
    valores = (nome, email, senha)
    cursor.execute(sql, valores)
    cursor.close()
    con.commit()

def main():
    con = criar_conexao("localhost", "root", "", "bd_ferramanta_ov")

    insere_usuario(con, "Ola Mundo", "ola@mundo.com.br", "olamundo")

    fechar_conexao(con)

if __name__ == "__main__":
    main()