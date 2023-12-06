-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 12:19 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `summer_journey`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` text COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_author` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_content`, `post_author`) VALUES
(4, '10 điểm đến du lịch mùa hè hấp dẫn nhất', 'Mùa hè là thời gian lý tưởng để đi du lịch, tận hưởng những chuyến đi nghỉ mát và khám phá những vùng đất mới. Dưới đây là 10 điểm đến du lịch mùa hè hấp dẫn nhất trên thế giới, được tổng hợp dựa trên các tiêu chí như cảnh quan thiên nhiên, văn hóa, lịch sử, hoạt động vui chơi giải trí,...</p>\r\n  <ul>\r\n    <li><strong>1. Phú Quốc, Việt Nam</strong></li>\r\n    <li><strong>2. Nha Trang, Việt Nam</strong></li>\r\n    <li><strong>3. Đà Lạt, Việt Nam</strong></li>\r\n    <li><strong>4. Bali, Indonesia</strong></li>\r\n    <li><strong>5. Phuket, Thái Lan</strong></li>\r\n    <li><strong>6. Maldives</strong></li>\r\n    <li><strong>7. Hawaii, Hoa Kỳ</strong></li>\r\n    <li><strong>8. Santorini, Hy Lạp</strong></li>\r\n    <li><strong>9. Cinque Terre, Ý</strong></li>\r\n    <li><strong>10. Iceland</strong></li>\r\n  </ul>\r\n  <p>Trên đây là 10 điểm đến du lịch mùa hè hấp dẫn nhất trên thế giới. Hy vọng bài viết này sẽ giúp bạn lựa chọn được điểm đến phù hợp cho chuyến du lịch mùa hè của mình.', 'FoxH'),
(5, 'Cách lên kế hoạch cho một chuyến đi du lịch tự túc', 'Du lịch tự túc là một trải nghiệm tuyệt vời cho những ai muốn khám phá thế giới theo cách riêng của mình. Tuy nhiên, để có một chuyến đi suôn sẻ và đáng nhớ, bạn cần lên kế hoạch kỹ lưỡng. Dưới đây là một số bước cơ bản để lên kế hoạch cho một chuyến đi du lịch tự túc:</p>\r\n\r\n  <ol>\r\n    <li><strong>Xác định mục tiêu chuyến đi</strong></li>\r\n    <p>Trước khi bắt đầu lên kế hoạch, bạn cần xác định mục tiêu chuyến đi của mình là gì. Bạn muốn thư giãn, khám phá văn hóa, hay tham gia các hoạt động thể thao mạo hiểm? Khi đã xác định được mục tiêu, bạn sẽ dễ dàng lựa chọn điểm đến và các hoạt động phù hợp.</p>\r\n\r\n    <li><strong>Tìm hiểu thông tin về điểm đến</strong></li>\r\n    <p>Sau khi đã xác định được điểm đến, bạn cần tìm hiểu thông tin về nơi đó. Bạn có thể tìm hiểu trên internet, sách báo, hoặc hỏi ý kiến của những người đã từng đi du lịch đến đó. Thông tin bạn cần tìm hiểu bao gồm:</p>\r\n      <ul>\r\n        <li>Thời tiết</li>\r\n        <li>Giao thông</li>\r\n        <li>Khách sạn, nhà nghỉ</li>\r\n        <li>Ẩm thực</li>\r\n        <li>Các hoạt động tham quan, vui chơi giải trí</li>\r\n      </ul>\r\n\r\n    <li><strong>Lập lịch trình chuyến đi</strong></li>\r\n    <p>Dựa trên thông tin bạn đã tìm hiểu, hãy lập lịch trình chuyến đi chi tiết. Lịch trình cần bao gồm:</p>\r\n      <ul>\r\n        <li>Ngày khởi hành và kết thúc</li>\r\n        <li>Thời gian lưu trú tại mỗi điểm đến</li>\r\n        <li>Các hoạt động tham quan, vui chơi giải trí</li>\r\n        <li>Chi phí dự trù</li>\r\n      </ul>\r\n\r\n    <li><strong>Đặt vé máy bay, khách sạn</strong></li>\r\n    <p>Sau khi đã có lịch trình, bạn cần đặt vé máy bay, khách sạn. Bạn nên đặt vé và phòng sớm để có giá tốt và tránh tình trạng hết chỗ.</p>\r\n\r\n    <li><strong>Làm thủ tục visa</strong></li>\r\n    <p>Nếu bạn đi du lịch đến quốc gia cần visa, bạn cần làm thủ tục xin visa trước khi khởi hành.</p>\r\n\r\n    <li><strong>Mua bảo hiểm du lịch</strong></li>\r\n    <p>Bảo hiểm du lịch sẽ giúp bạn được bảo hiểm trong trường hợp xảy ra tai nạn, bệnh tật, hoặc mất mát tài sản.</p>\r\n\r\n    <li><strong>Chuẩn bị hành lý</strong></li>\r\n    <p>Hãy chuẩn bị hành lý đầy đủ và cần thiết cho chuyến đi. Bạn cũng nên kiểm tra kỹ các giấy tờ tùy thân, hộ chiếu, visa, vé máy bay,...</p>\r\n\r\n    <li><strong>Tìm hiểu về văn hóa địa phương</strong></li>\r\n    <p>Trước khi đi du lịch, bạn nên tìm hiểu về văn hóa địa phương của nơi bạn sẽ đến. Điều này sẽ giúp bạn tránh những hành vi bất lịch sự và có những trải nghiệm thú vị hơn.</p>\r\n\r\n  </ol>\r\n\r\n  <p>Dưới đây là một số lưu ý khi lên kế hoạch cho một chuyến đi du lịch tự túc:</p>\r\n\r\n  <ul>\r\n    <li>Hãy linh hoạt trong kế hoạch của bạn. Điều gì có thể xảy ra và bạn cần sẵn sàng cho những tình huống bất ngờ.</li>\r\n    <li>Hãy dành thời gian để tìm hiểu về điểm đến của bạn. Điều này sẽ giúp bạn tận dụng tối đa thời gian của mình.</li>\r\n    <li>Hãy đặt phòng khách sạn và vé máy bay sớm để có giá tốt.</li>\r\n    <li>Hãy mua bảo hiểm du lịch để đề phòng những trường hợp không mong muốn.</li>\r\n    <li>Hãy chuẩn bị hành lý đầy đủ và cần thiết cho chuyến đi.</li>\r\n    <li>Hãy tìm hiểu về văn hóa địa phương để tránh những hành vi bất lịch sự.</li>\r\n</ul>\r\n<p>Chúc bạn có một chuyến đi du lịch tự túc vui vẻ và đáng nhớ!', 'FoxH');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
