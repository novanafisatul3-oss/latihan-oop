<?php
interface Loginable
{
    public function hash(): string;
}
class Buku
{
    public function __construct(
        public string $judul,
        protected string $penulis,
    ) {
    }
    public function info(): string
    {
        return "{$this->judul} - {$this->penulis}";
    }
}
class Ebook extends Buku
{
    public function __construct(
        string $judul,
        string $penulis,
        public string $format = "PDF",
    ) {
        parent::__construct($judul, $penulis);
    }
    public function info(): string
    {
        return "{$this->judul} ({$this->format})";
    }
}
class User implements Loginable
{
    public function hash(): string
    {
        return hash("sha256", "secret");
    }
}