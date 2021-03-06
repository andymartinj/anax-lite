<?php

namespace QuasaR\Session;

class Session
{

    private $name;

    public function __construct($name = "QuasaR_Session_OP")
    {
        $this->name = $name;
    }

    public function start()
    {
        session_name($this->name);

        if (!empty(session_id())) {
            session_destroy();
        }
        session_start();
    }

    public function has($key)
    {
        return array_key_exists($key, $_SESSION);
    }

    public function set($name, $val)
    {
        $_SESSION[$name] = $val;
    }

    public function get($key, $default = false)
    {
        return (self::has($key)) ? $_SESSION[$key] : $default;
    }

    public function destroy()
    {
        session_destroy();
    }

    public function delete($key)
    {
        if (self::has($key)) {
            unset($_SESSION[$key]);
        }
    }

    public function dump()
    {
        return $_SESSION;
    }
}
