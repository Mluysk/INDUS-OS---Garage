INSERT INTO roles (name, description) VALUES
('Admin', 'Administrador do sistema'),
('Gerente', 'Gerência da oficina'),
('Mecanico', 'Técnico mecânico'),
('Caixa', 'Operador de caixa'),
('Estoquista', 'Responsável pelo estoque'),
('Leitor', 'Acesso somente leitura');

INSERT INTO users (name, email, password, active) VALUES
('Administrador', 'admin@indusos.com', '$2y$10$z2M6xIqi8x35uF9nL9w4TOH8aCgoqBexA5G0C6Kk3G61xX1i1Qd7e', 1);

INSERT INTO user_roles (user_id, role_id)
SELECT 1, id FROM roles WHERE name = 'Admin';
