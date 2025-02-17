use DATABASE laravel

CREATE TABLE lr_room_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lr_room_types (name, description) VALUES
('Single Room', 'A basic room for one person with a single bed and essential amenities.'),
('Double Room', 'A room with a double bed, ideal for couples or two guests.'),
('Deluxe Room', 'A spacious room with premium amenities, including a king-size bed and a sitting area.'),
('Suite', 'A luxurious room with a separate living area, high-end amenities, and extra space.'),
('Family Room', 'A larger room designed for families, typically with multiple beds and additional facilities.'),
('Presidential Suite', 'The most luxurious option with top-tier amenities, separate rooms, and premium services.');

CREATE TABLE lr_rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_number VARCHAR(50) NOT NULL UNIQUE,
    room_type_id INT NOT NULL,
    status_id INT,
    price DECIMAL(10,2) NOT NULL,
    description TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lr_rooms (room_number, room_type_id, status_id, price, description) VALUES
('101', 1, 1, 150.00, 'Cozy single room with a city view.'),
('102', 2, 2, 200.00, 'Spacious double room with a balcony.'),
('201', 3, 1, 300.00, 'Luxury suite with a king-size bed and private jacuzzi.'),
('202', 4, 3, 250.00, 'Deluxe family room with extra bedding options.'),
('301', 5, 4, 180.00, 'Standard twin room, ideal for business travelers.');


CREATE TABLE lr_statuses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lr_statuses (name, description) VALUES
('Available', 'The room is available for booking.'),
('Occupied', 'The room is currently occupied by a guest.'),
('Reserved', 'The room has been booked but the guest has not yet checked in.'),
('Under Maintenance', 'The room is currently under maintenance and not available for booking.'),
('Out of Service', 'The room is temporarily out of service due to issues.'),
('Cleaning in Progress', 'The room is being cleaned and will be available soon.');

CREATE TABLE lr_roles(
    id INT auto_increment PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
NSERT INTO lr_roles (name) VALUES
('Admin'),
('Manager'),
('Client'),
('Member');
