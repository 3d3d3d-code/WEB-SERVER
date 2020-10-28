<?php


class User
{

    private int $user_id;

    private string $user_name;

    private string $user_email;
    private string $user_pwd;
    private int $user_role;

    public function getUserId(): int
    {
        return $this->user_id;
    }
    public function getUserName(): string
    {
        return $this->user_name;
    }
}
