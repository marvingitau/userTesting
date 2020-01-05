BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "migrations" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"migration"	varchar NOT NULL,
	"batch"	integer NOT NULL
);
CREATE TABLE IF NOT EXISTS "users" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"name"	varchar NOT NULL,
	"email"	varchar NOT NULL,
	"email_verified_at"	datetime,
	"password"	varchar NOT NULL,
	"remember_token"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "password_resets" (
	"email"	varchar NOT NULL,
	"token"	varchar NOT NULL,
	"created_at"	datetime
);
CREATE TABLE IF NOT EXISTS "projects" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"title"	varchar NOT NULL,
	"description"	text NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "tasks" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"projects_id"	integer NOT NULL,
	"description"	varchar NOT NULL,
	"completed"	tinyint(1) NOT NULL DEFAULT '0',
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "roles" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"name"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "role_user" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"role_id"	integer NOT NULL,
	"user_id"	integer NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime
);
INSERT INTO "migrations" ("id","migration","batch") VALUES (1,'2014_10_12_000000_create_users_table',1),
 (2,'2014_10_12_100000_create_password_resets_table',1),
 (3,'2019_09_03_103959_create_projects_table',1),
 (4,'2019_09_17_070928_create_tasks_table',1),
 (5,'2020_01_03_232559_create_roles_table',1),
 (6,'2020_01_03_233956_create_role_user_table',1);
CREATE UNIQUE INDEX IF NOT EXISTS "users_email_unique" ON "users" (
	"email"
);
CREATE INDEX IF NOT EXISTS "password_resets_email_index" ON "password_resets" (
	"email"
);
COMMIT;
