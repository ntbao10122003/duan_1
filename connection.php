
    <?php
    $db = new DB;
    $db->connect();
    // Lớp database
    class DB
    {
        private $hostname = 'localhost',
            $username = "root",
            $password = "",
            $dbname = "duanmau";
        // Biến lưu trữ kết nối
        public $cn = NULL;

        // Hàm kết nối
        public function connect()
        {
            $this->cn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);

            if (!$this->cn) {
                echo "Bảo trì hệ thống. Quay lại sau 5 phút !";
                exit;
            }
            mysqli_set_charset($this->cn, "utf8");
            return $this->cn;
        }
        // Hàm chống sql injection
        public function real_escape_string($sql = null)
        {
            if ($this->cn) return mysqli_real_escape_string($this->cn, $sql);
        }

        // Hàm ngắt kết nối
        public function close()
        {
            if ($this->cn) {
                mysqli_close($this->cn);
            }
        }

        // Hàm truy vấn
        public function query($sql = null)
        {
            if ($this->cn) {
                return mysqli_query($this->cn, $sql);
            }
        }

        // Hàm Đếm Số Dữ Liệu
        public function num_rows($sql = null)
        {
            if ($this->cn) {
                $query = mysqli_query($this->cn, $sql);
                if ($query) {
                    $row = mysqli_num_rows($query);
                    return $row;
                }
            }
        }

        // Hàm đếm tổng số hàng
        public function fetch_row($sql = null)
        {
            if ($this->cn) {
                $query = mysqli_query($this->cn, $sql);
                if ($query) {
                    $row = $query->fetch_row();
                    return $row[0];
                }
            }
        }

        // Hàm lấy dữ liệu
        public function fetch_assoc($sql, $type)
        {
            if (!empty($this->cn)) {
                $query = mysqli_query($this->cn, $sql);
                if ($query) {
                    if ($type == 0) {
                        $data = array();
                        // Lấy nhiều dữ liệu gán vào mảng
                        while ($row = mysqli_fetch_assoc($query)) {
                            $data[] = $row;
                        }
                        return $data;
                    } else if ($type == 1) {
                        // Lấy một hàng dữ liệu gán vào biến
                        $data = mysqli_fetch_assoc($query);
                        return $data;
                    }
                }
            }
        }

        //Hàm Thêm Dữ Liệu
        public function insert($table, $data)
        {
            $field_list = '';
            $value_list = '';
            for ($i = 0; $i < count($data); $i++) {
                $value_list1 = '';
                foreach ($data[$i] as $key => $value) {
                    if ($i == 0) {
                        $field_list .= ",$key";
                    }
                    $value_list1 .= ",'" . mysqli_real_escape_string($this->cn, $value) . "'";
                }
                $value_list .= ",(" . trim($value_list1, ',') . ")";
            }
            $sql = 'INSERT INTO ' . $table . ' (' . trim($field_list, ',') . ') VALUES ' . trim($value_list, ',') . ' ';
            if (!mysqli_query($this->cn, $sql)) {
                return "Error: " . $sql . "<br>" . mysqli_error($this->cn);
            }
        }

        // Hàm lấy ID cao nhất
        public function insert_id()
        {
            if ($this->cn) {
                $count = mysqli_insert_id($this->cn);
                if ($count == '0') {
                    $count = '1';
                } else {
                    $count = $count;
                }
                return $count;
            }
        }

        // Hàm charset cho database
        public function set_char($uni)
        {
            if ($this->cn) {
                mysqli_set_charset($this->cn, $uni);
            }
        }

        //update csdl
        public function update($table, $data, $where)
        {
            if ($this->cn) {
                $sql = '';
                foreach ($data as $key => $value) {
                    $sql .= "$key = '" . mysqli_real_escape_string($this->cn, $value) . "',";
                }
                $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;
                return mysqli_query($this->cn, $sql);
            }
        }
    }


    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = 'đ')
        {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }    
    
    function trangthai($stt){
        if($stt == 0) {
            return "đơn ahngf mới";
        }else if ( $stt == 1){
            return "đang chờ ";
        }else if ( $stt == 2){
            return ("đang giao hàng");
        }
    }
    ?>