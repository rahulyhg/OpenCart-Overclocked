<?php
class ModelDesignMedia extends Model {

	public function addMedia($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "media SET name = '" . $this->db->escape($data['name']) . "', media = '" .  $this->db->escape(html_entity_decode($data['media'], ENT_QUOTES, 'UTF-8')) . "', credit = '" . $this->db->escape($data['credit']) . "', status = '" . (int)$data['status'] . "'");

		$media_id = $this->db->getLastId();

		// Save and Continue
		$this->session->data['new_media_id'] = $media_id;
	}

	public function editMedia($media_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "media SET name = '" . $this->db->escape($data['name']) . "', media = '" .  $this->db->escape(html_entity_decode($data['media'], ENT_QUOTES, 'UTF-8')) . "', credit = '" . $this->db->escape($data['credit']) . "', status = '" . (int)$data['status'] . "' WHERE media_id = '" . (int)$media_id . "'");
	}

	public function deleteMedia($media_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "media WHERE media_id = '" . (int)$media_id . "'");
	}

	public function getMedia($media_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "media WHERE media_id = '" . (int)$media_id . "'");

		return $query->row;
	}

	public function getMedias($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "media";

		if (!empty($data['filter_name'])) {
			$sql .= " WHERE name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sql .= " GROUP BY media_id";

		$sort_data = array(
			'name',
			'status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalMedias() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "media");

		return $query->row['total'];
	}

	public function getMediaImage($media_id) {
		$image = 'no_file.jpg';

		$query = $this->db->query("SELECT DISTINCT media AS filename FROM " . DB_PREFIX . "media WHERE media_id = '" . (int)$media_id . "'");

		$filename = $query->row['filename'];

		$ext = utf8_substr(strrchr($filename, '.'), 1);

		if (strtolower($ext) == 'mp3') { $image = 'mp3.png'; }
		if (strtolower($ext) == 'mp4') { $image = 'mp4.png'; }
		if (strtolower($ext) == 'oga') { $image = 'oga.png'; }
		if (strtolower($ext) == 'ogv') { $image = 'ogv.png'; }
		if (strtolower($ext) == 'ogg') { $image = 'ogg.png'; }
		if (strtolower($ext) == 'webm') { $image = 'webm.png'; }
		if (strtolower($ext) == 'm4a') { $image = 'm4a.png'; }
		if (strtolower($ext) == 'm4v') { $image = 'm4v.png'; }
		if (strtolower($ext) == 'wmv') { $image = 'wmv.png'; }
		if (strtolower($ext) == 'wma') { $image = 'wma.png'; }
		if (strtolower($ext) == 'flv') { $image = 'flv.png'; }

		return $image;
	}

	public function getMediaSize($media_id) {
		$filesize = 0;

		$query = $this->db->query("SELECT DISTINCT media AS filename FROM " . DB_PREFIX . "media WHERE media_id = '" . (int)$media_id . "'");

		$filename = $query->row['filename'];

		if ($filename) {
			$size = filesize(DIR_IMAGE . $filename);

			$i = 0;

			$suffix = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');

			while (($size / 2048) > 1) {
				$size = $size / 2048;
				$i++;
			}

			$filesize = round(utf8_substr($size, 0, utf8_strpos($size, '.') + 4), 2) . $suffix[$i];
		}

		return $filesize;
	}
}
