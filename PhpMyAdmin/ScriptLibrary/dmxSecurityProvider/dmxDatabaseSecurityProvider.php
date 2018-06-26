<?php
/*
 DMXzone Security Provider
 Version: 1.1.0
 (c) 2013-2014 DMXzone.com
*/

class DatabaseSecurityProvider
{
	private $cfg;

	public function __construct($cfg) {
		$this->cfg = $cfg;
	}

	public function validate($username, $password) {
		$user = $this->cfg->users;
		$conn = new SqlConnection();
		$data = $conn->execute(
			SqlBuilder($user->table)
			->where($user->username, '=', $username)
		);

		foreach ($data as $dbUser) {
			if ($dbUser[$user->password] == $password) {
				return $dbUser[$user->identity];
			}
		}

		return FALSE;
	}

	public function permissions($identity, $permissions = NULL) {
		$conn = new SqlConnection();

		foreach ($permissions as $permission) {
			if (!isset($this->cfg->permissions->$permission)) return FALSE;

			$permission = $this->cfg->permissions->$permission;
			$table = isset($permission->table) ? $permission->table : $this->cfg->users->table;
			$ident = isset($permission->identity) ? $permission->identity : $this->cfg->users->identity;

			$sql = SqlBuilder($table)->where($ident, '=', $identity);

			foreach ($permission->conditions as $condition) {
				$sql->where($condition->column, $condition->operator, $condition->value);
			}

			if (count($conn->execute($sql)) == 0) return FALSE;
		}

		return TRUE;
	}
}
?>