<?php

/**
 * Classe de conexão com o banco de dados.
 *
 * @author Pablo R. Quadrado <pabloquadrado27@gmail.com>
 */
class DatabaseConnection
{
    /** @var PDO Instância de conexão com o banco de dados */
    private static $instance;

    /** @var string Dsn com driver, host e base dados que serão utilizados para estabelecer a conexão. */
    private static $dsn;

    /** @var string Usuário que será utilizado para estabelecer a conexão. */
    private static $username;

    /** @var string Senha que será utilizada para estabelecer a conexão. */
    private static $password;

    /**
     * Construtor da classe DatabaseConnection.
     * Por conta da visibilidade, garante que haverá somente
     * uma instância de conexão com o banco durante a execução.
     */
    private function __construct() {}

    /**
     * Método que define os dados de conexão com o banco.
     */
    private static function setup()
    {
        self::$dsn = 'mysql:host=localhost;dbname=testsingleton';
        self::$username = 'root';
        self::$password = 'root';
    }

    /**
     * Retorna uma instância de conexão com o banco de dados.
     *
     * @return PDO
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::setup();

            self::$instance = new PDO(
                self::$dsn,
                self::$username,
                self::$password
            );

            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }

        return self::$instance;
    }
}