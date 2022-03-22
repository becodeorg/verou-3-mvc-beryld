<?php
class databaseManager
{
    private string $host;
    private string $user;
    private string $password;
    private string $dbname;

    public PDO $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
    }
    public function connect(): void
    {
        // TODO: make the connection to the database
//        $this->connection = new PDO();

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->connection = new PDO($dsn, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//set the default type of fetching method
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "this is working";
        } catch (PDOException $exception) {
            echo "connection ERROR Message : " . $exception->getMessage();
            echo "<br>Connection ERROR Code :  " . $exception->getCode();
            echo "<br> error occured in the file : " . $exception->getFile();
            echo "<br> error was on the line numero : " . $exception->getLine();
        }
    }

}
