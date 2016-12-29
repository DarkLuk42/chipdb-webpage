<?php return array (
  16550 => 
  array (
    'description' => 'Universal asynchronous receiver-transmitter with FIFOs',
    'aliases' => 
    array (
      0 => '16C550',
    ),
    'family' => 'uart',
    'datasheet' => 'http://www.national.com/ds/PC/PC16550D.pdf',
    'pins' => 
    array (
      'D__0' => 
      array (
        'desc' => 'data bus',
      ),
      'D__1' => 
      array (
        'desc' => 'data bus',
      ),
      'D__2' => 
      array (
        'desc' => 'data bus',
      ),
      'D__3' => 
      array (
        'desc' => 'data bus',
      ),
      'D__4' => 
      array (
        'desc' => 'data bus',
      ),
      'D__5' => 
      array (
        'desc' => 'data bus',
      ),
      'D__6' => 
      array (
        'desc' => 'data bus',
      ),
      'D__7' => 
      array (
        'desc' => 'data bus',
      ),
      'RCLK' => 
      array (
        'desc' => 'receiver clock input (16x baud rate)',
      ),
      'RX' => 
      array (
        'desc' => 'serial input',
      ),
      'TX' => 
      array (
        'desc' => 'serial output',
      ),
      'CS0' => 
      array (
        'desc' => 'chip select (active high)',
      ),
      'CS1' => 
      array (
        'desc' => 'chip select (active high)',
      ),
      '~CS2' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      '~BAUDOUT' => 
      array (
        'desc' => 'baud rate generator output',
      ),
      'XIN' => 
      array (
        'desc' => 'external crystal input',
      ),
      'XOUT' => 
      array (
        'desc' => 'external crystal output',
      ),
      '~WR' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'WR' => 
      array (
        'desc' => 'write enable (active high)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~RD' => 
      array (
        'desc' => 'read enable (active low)',
      ),
      'RD' => 
      array (
        'desc' => 'read enable (active high)',
      ),
      'DDIS' => 
      array (
        'desc' => 'driver disable',
      ),
      '~TXRDY' => 
      array (
        'desc' => 'TX DMA signal',
      ),
      '~ADS' => 
      array (
        'desc' => 'address strobe input',
      ),
      'A__2' => 
      array (
        'desc' => 'register select',
      ),
      'A__1' => 
      array (
        'desc' => 'register select',
      ),
      'A__0' => 
      array (
        'desc' => 'register select',
      ),
      '~RXRDY' => 
      array (
        'desc' => 'RX DMA signal',
      ),
      'INTR' => 
      array (
        'desc' => 'interrupt output (active high)',
      ),
      '~OUT2' => 
      array (
        'desc' => 'general purpose output',
      ),
      '~RTS' => 
      array (
        'desc' => 'request to send (output to modem)',
      ),
      '~DTR' => 
      array (
        'desc' => 'data terminal ready (output to modem)',
      ),
      '~OUT1' => 
      array (
        'desc' => 'general purpose output',
      ),
      'MR' => 
      array (
        'desc' => 'master reset (active high)',
      ),
      '~CTS' => 
      array (
        'desc' => 'clear to send (input from modem)',
      ),
      '~DSR' => 
      array (
        'desc' => 'data set ready (input from modem)',
      ),
      '~DCD' => 
      array (
        'desc' => 'data carrier detect (input from modem)',
      ),
      '~RI' => 
      array (
        'desc' => 'ring indicator (input from modem)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'maximum baud rate',
        'val' => '1.5',
        'unit' => 'Mbaud',
      ),
    ),
    'notes' => 
    array (
      0 => 'Register 000: receive buffer (read), transmit holding register (write)',
      1 => 'Register 001: interrupt enable',
      2 => 'Register 010: interrupt identification (read), FIFO control (write)',
      3 => 'Register 011: line control',
      4 => 'Register 100: modem control',
      5 => 'Register 101: line status',
      6 => 'Register 110: modem status',
      7 => 'Register 111: scratch register',
      8 => 'When bit 7 in the Line Control Register is set, the baud rate divisor latch is enabled. (register 000=LSB, register 001=MSB)',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D__0',
        2 => 'D__1',
        3 => 'D__2',
        4 => 'D__3',
        5 => 'D__4',
        6 => 'D__5',
        7 => 'D__6',
        8 => 'D__7',
        9 => 'RCLK',
        10 => 'RX',
        11 => 'TX',
        12 => 'CS0',
        13 => 'CS1',
        14 => '~CS2',
        15 => '~BAUDOUT',
        16 => 'XIN',
        17 => 'XOUT',
        18 => '~WR',
        19 => 'WR',
        20 => 'GND',
        21 => '~RD',
        22 => 'RD',
        23 => 'DDIS',
        24 => '~TXRDY',
        25 => '~ADS',
        26 => 'A__2',
        27 => 'A__1',
        28 => 'A__0',
        29 => '~RXRDY',
        30 => 'INTR',
        31 => '~OUT2',
        32 => '~RTS',
        33 => '~DTR',
        34 => '~OUT1',
        35 => 'MR',
        36 => '~CTS',
        37 => '~DSR',
        38 => '~DCD',
        39 => '~RI',
        40 => 'Vcc',
      ),
    ),
  ),
  1802 => 
  array (
    'description' => 'CDP1802 CMOS 8-bit microprocessor',
    'aliases' => 
    array (
      0 => 'CDP1802A',
      1 => 'CDP1802AC',
      2 => 'CDP1802BC',
    ),
    'family' => 'RCA',
    'datasheet' => 'pdf_datasheet_url',
    'pins' => 
    array (
      'CLOCK' => 
      array (
        'desc' => 'input for externally generated single-phase clock',
      ),
      '~WAIT~' => 
      array (
        'desc' => 'control line',
      ),
      '~CLEAR~' => 
      array (
        'desc' => 'control line',
      ),
      'Q' => 
      array (
        'desc' => 'general output',
      ),
      'SC1' => 
      array (
        'desc' => 'state code',
      ),
      'SC0' => 
      array (
        'desc' => 'state code',
      ),
      '~MRD~' => 
      array (
        'desc' => 'read pulse',
      ),
      'BUS 7' => 
      array (
        'desc' => 'data bus',
      ),
      'BUS 6' => 
      array (
        'desc' => 'data bus',
      ),
      'BUS 5' => 
      array (
        'desc' => 'data bus',
      ),
      'BUS 4' => 
      array (
        'desc' => 'data bus',
      ),
      'BUS 3' => 
      array (
        'desc' => 'data bus',
      ),
      'BUS 2' => 
      array (
        'desc' => 'data bus',
      ),
      'BUS 1' => 
      array (
        'desc' => 'data bus',
      ),
      'BUS 0' => 
      array (
        'desc' => 'data bus',
      ),
      'V__CC' => 
      array (
        'desc' => 'I/O voltage supply',
      ),
      'N2' => 
      array (
        'desc' => 'I/O control line',
      ),
      'N1' => 
      array (
        'desc' => 'I/O control line',
      ),
      'N0' => 
      array (
        'desc' => 'I/O control line',
      ),
      'V__SS' => 
      array (
        'desc' => 'ground',
      ),
      '~EF4~' => 
      array (
        'desc' => 'I/O flag',
      ),
      '~EF3~' => 
      array (
        'desc' => 'I/O flag',
      ),
      '~EF2~' => 
      array (
        'desc' => 'I/O flag',
      ),
      '~EF1~' => 
      array (
        'desc' => 'I/O flag',
      ),
      'MA0' => 
      array (
        'desc' => 'memory address',
      ),
      'MA1' => 
      array (
        'desc' => 'memory address',
      ),
      'MA2' => 
      array (
        'desc' => 'memory address',
      ),
      'MA3' => 
      array (
        'desc' => 'memory address',
      ),
      'MA4' => 
      array (
        'desc' => 'memory address',
      ),
      'MA5' => 
      array (
        'desc' => 'memory address',
      ),
      'MA6' => 
      array (
        'desc' => 'memory address',
      ),
      'MA7' => 
      array (
        'desc' => 'memory address',
      ),
      'TPB' => 
      array (
        'desc' => 'timing pulse',
      ),
      'TPA' => 
      array (
        'desc' => 'timing pulse',
      ),
      '~MWR~' => 
      array (
        'desc' => 'write pulse',
      ),
      '~INTERRUPT~' => 
      array (
        'desc' => 'interrupt',
      ),
      '~DMA_OUT~' => 
      array (
        'desc' => 'DMA out',
      ),
      '~DMA_IN~' => 
      array (
        'desc' => 'DMA in',
      ),
      '~XTAL~' => 
      array (
        'desc' => 'crystal input, for on-chip oscillator',
      ),
      'V__DD' => 
      array (
        'desc' => 'internal voltage supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum input clock maximum frequency at 5V',
        'val' => '3.2',
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'Maximum input clock maximum frequency at 10V',
        'val' => '6.4',
        'unit' => 'MHz',
      ),
      2 => 
      array (
        'param' => 'Minimum instruction fetch-execute time at 5V',
        'val' => '5',
        'unit' => 'µs',
      ),
    ),
    'notes' => 
    array (
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'CLOCK',
        2 => '~WAIT~',
        3 => '~CLEAR~',
        4 => 'Q',
        5 => 'SC1',
        6 => 'SC0',
        7 => '~MRD~',
        8 => 'BUS 7',
        9 => 'BUS 6',
        10 => 'BUS 5',
        11 => 'BUS 4',
        12 => 'BUS 3',
        13 => 'BUS 2',
        14 => 'BUS 1',
        15 => 'BUS 0',
        16 => 'V__CC',
        17 => 'N2',
        18 => 'N1',
        19 => 'N0',
        20 => 'V__SS',
        21 => '~EF4~',
        22 => '~EF3~',
        23 => '~EF2~',
        24 => '~EF1~',
        25 => 'MA0',
        26 => 'MA1',
        27 => 'MA2',
        28 => 'MA3',
        29 => 'MA4',
        30 => 'MA5',
        31 => 'MA6',
        32 => 'MA7',
        33 => 'TPB',
        34 => 'TPA',
        35 => '~MWR~',
        36 => '~INTERRUPT~',
        37 => '~DMA_OUT~',
        38 => '~DMA_IN~',
        39 => '~XTAL~',
        40 => 'V__DD',
      ),
    ),
  ),
  '24LC256' => 
  array (
    'description' => '256K I2C CMOS serial EEPROM',
    'aliases' => 
    array (
      0 => '24AA256',
      1 => '24FC256',
    ),
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21203P.pdf',
    'pins' => 
    array (
      'A0' => 
      array (
        'desc' => 'user-configurable chip select',
      ),
      'A1' => 
      array (
        'desc' => 'user-configurable chip select',
      ),
      'A2' => 
      array (
        'desc' => 'user-configurable chip select',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'SDA' => 
      array (
        'desc' => 'serial data input/output',
      ),
      'SCL' => 
      array (
        'desc' => 'serial clock input',
      ),
      'WP' => 
      array (
        'desc' => 'write protect (active high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => 
        array (
          0 => '1.7 (24AA256)',
          1 => '2.5 (24LC256)',
          2 => '1.7 (24FC256)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '100k (Vcc < 2.5V)',
          1 => '400k (24AA256)',
          2 => '400k (24LC256)',
          3 => '1M (24FC256)',
        ),
        'unit' => 'Hz',
      ),
      2 => 
      array (
        'param' => 'Maximum write cycle time',
        'val' => '5',
        'unit' => 'ms',
      ),
      3 => 
      array (
        'param' => 'Endurance',
        'val' => '1 000 000',
        'unit' => 'cycles',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A0',
        2 => 'A1',
        3 => 'A2',
        4 => 'GND',
        5 => 'SDA',
        6 => 'SCL',
        7 => 'WP',
        8 => 'Vcc',
      ),
    ),
  ),
  '28C64' => 
  array (
    'description' => '8K x 8 parallel EEPROM',
    'aliases' => 
    array (
    ),
    'family' => 'memory',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc0001H.pdf',
    'pins' => 
    array (
      'RDY/~BUSY~' => 
      array (
        'desc' => 'device status',
      ),
      'A__12' => 
      array (
        'desc' => 'address input',
      ),
      'A__7' => 
      array (
        'desc' => 'address input',
      ),
      'A__6' => 
      array (
        'desc' => 'address input',
      ),
      'A__5' => 
      array (
        'desc' => 'address input',
      ),
      'A__4' => 
      array (
        'desc' => 'address input',
      ),
      'A__3' => 
      array (
        'desc' => 'address input',
      ),
      'A__2' => 
      array (
        'desc' => 'address input',
      ),
      'A__1' => 
      array (
        'desc' => 'address input',
      ),
      'A__0' => 
      array (
        'desc' => 'address input',
      ),
      'I/O__0' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__1' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__2' => 
      array (
        'desc' => 'data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'I/O__3' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__4' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__5' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__6' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__7' => 
      array (
        'desc' => 'data input/output',
      ),
      '~CE' => 
      array (
        'desc' => 'chip enable (active low)',
      ),
      'A__10' => 
      array (
        'desc' => 'address input',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'A__11' => 
      array (
        'desc' => 'address input',
      ),
      'A__9' => 
      array (
        'desc' => 'address input',
      ),
      'A__8' => 
      array (
        'desc' => 'address input',
      ),
      '~WE' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'RDY/~BUSY~',
        2 => 'A__12',
        3 => 'A__7',
        4 => 'A__6',
        5 => 'A__5',
        6 => 'A__4',
        7 => 'A__3',
        8 => 'A__2',
        9 => 'A__1',
        10 => 'A__0',
        11 => 'I/O__0',
        12 => 'I/O__1',
        13 => 'I/O__2',
        14 => 'GND',
        15 => 'I/O__3',
        16 => 'I/O__4',
        17 => 'I/O__5',
        18 => 'I/O__6',
        19 => 'I/O__7',
        20 => '~CE',
        21 => 'A__10',
        22 => '~OE',
        23 => 'A__11',
        24 => 'A__9',
        25 => 'A__8',
        26 => 'NC',
        27 => '~WE',
        28 => 'Vcc',
      ),
    ),
  ),
  4001 => 
  array (
    'description' => 'Quad 2-input NOR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4001b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  4002 => 
  array (
    'description' => 'Dual 4-input NOR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4002b.pdf',
    'pins' => 
    array (
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1Y',
        2 => '1A',
        3 => '1B',
        4 => '1C',
        5 => '1D',
        6 => 'NC',
        7 => 'GND',
        8 => 'NC',
        9 => '2A',
        10 => '2B',
        11 => '2C',
        12 => '2D',
        13 => '2Y',
        14 => 'Vcc',
      ),
    ),
  ),
  40106 => 
  array (
    'description' => 'Hex inverting Schmitt trigger',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef40106b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'data output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'data output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1Y',
        3 => '2A',
        4 => '2Y',
        5 => '3A',
        6 => '3Y',
        7 => 'GND',
        8 => '4Y',
        9 => '4A',
        10 => '5Y',
        11 => '5A',
        12 => '6Y',
        13 => '6A',
        14 => 'Vcc',
      ),
    ),
  ),
  4011 => 
  array (
    'description' => 'Quad 2-input NAND gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4011b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  4013 => 
  array (
    'description' => 'Dual D-type flip-flop with set and clear',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4013b.pdf',
    'pins' => 
    array (
      '1Q' => 
      array (
        'desc' => 'true output',
      ),
      '1~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '1CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '1CD' => 
      array (
        'desc' => 'asynchronous clear-direct input',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      '1SD' => 
      array (
        'desc' => 'asynchronous set-direct input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2SD' => 
      array (
        'desc' => 'asynchronous set-direct input',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      '2CD' => 
      array (
        'desc' => 'asynchronous clear-direct input',
      ),
      '2CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '2~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '2Q' => 
      array (
        'desc' => 'true output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1Q',
        2 => '1~Q',
        3 => '1CP',
        4 => '1CD',
        5 => '1D',
        6 => '1SD',
        7 => 'GND',
        8 => '2SD',
        9 => '2D',
        10 => '2CD',
        11 => '2CP',
        12 => '2~Q',
        13 => '2Q',
        14 => 'Vcc',
      ),
    ),
  ),
  4014 => 
  array (
    'description' => '8-bit static shift register',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4014b.pdf',
    'pins' => 
    array (
      'D7' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Q5' => 
      array (
        'desc' => 'output',
      ),
      'Q7' => 
      array (
        'desc' => 'output',
      ),
      'D3' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D0' => 
      array (
        'desc' => 'parallel data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'PE' => 
      array (
        'desc' => 'parallel enable input',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      'DS' => 
      array (
        'desc' => 'serial data input',
      ),
      'Q6' => 
      array (
        'desc' => 'output',
      ),
      'D4' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D5' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D6' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D7',
        2 => 'Q5',
        3 => 'Q7',
        4 => 'D3',
        5 => 'D2',
        6 => 'D1',
        7 => 'D0',
        8 => 'GND',
        9 => 'PE',
        10 => 'CP',
        11 => 'DS',
        12 => 'Q6',
        13 => 'D4',
        14 => 'D5',
        15 => 'D6',
        16 => 'Vcc',
      ),
    ),
  ),
  4015 => 
  array (
    'description' => 'Dual 4-bit serial-in/parallel-out shift register',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4015b.pdf',
    'pins' => 
    array (
      '2CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '2Q3' => 
      array (
        'desc' => 'parallel output',
      ),
      '1Q2' => 
      array (
        'desc' => 'parallel output',
      ),
      '1Q1' => 
      array (
        'desc' => 'parallel output',
      ),
      '1Q0' => 
      array (
        'desc' => 'parallel output',
      ),
      '1MR' => 
      array (
        'desc' => 'master reset',
      ),
      '1D' => 
      array (
        'desc' => 'serial data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '1CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '1Q3' => 
      array (
        'desc' => 'parallel output',
      ),
      '2Q2' => 
      array (
        'desc' => 'parallel output',
      ),
      '2Q1' => 
      array (
        'desc' => 'parallel output',
      ),
      '2Q0' => 
      array (
        'desc' => 'parallel output',
      ),
      '2MR' => 
      array (
        'desc' => 'master reset',
      ),
      '2D' => 
      array (
        'desc' => 'serial data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '2CP',
        2 => '2Q3',
        3 => '1Q2',
        4 => '1Q1',
        5 => '1Q0',
        6 => '1MR',
        7 => '1D',
        8 => 'GND',
        9 => '1CP',
        10 => '1Q3',
        11 => '2Q2',
        12 => '2Q1',
        13 => '2Q0',
        14 => '2MR',
        15 => '2D',
        16 => 'Vcc',
      ),
    ),
  ),
  4017 => 
  array (
    'description' => 'Decade counter/divider with 10 decoded outputs',
    'family' => '4000',
    'datasheet' => 'http://www.national.com/ds/CD/CD4017BC.pdf',
    'pins' => 
    array (
      'Q5' => 
      array (
        'desc' => 'output',
      ),
      'Q1' => 
      array (
        'desc' => 'output',
      ),
      'Q0' => 
      array (
        'desc' => 'output',
      ),
      'Q2' => 
      array (
        'desc' => 'output',
      ),
      'Q6' => 
      array (
        'desc' => 'output',
      ),
      'Q7' => 
      array (
        'desc' => 'output',
      ),
      'Q3' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q8' => 
      array (
        'desc' => 'output',
      ),
      'Q4' => 
      array (
        'desc' => 'output',
      ),
      'Q9' => 
      array (
        'desc' => 'output',
      ),
      'CARRY' => 
      array (
        'desc' => 'carry output',
      ),
      '~CE' => 
      array (
        'desc' => 'clock enable (active low)',
      ),
      'CLOCK' => 
      array (
        'desc' => 'clock input (low-to-high, positive edge triggered)',
      ),
      'RESET' => 
      array (
        'desc' => 'reset (active high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '2 (CD4017)',
          1 => '77 (74HC4017)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q5',
        2 => 'Q1',
        3 => 'Q0',
        4 => 'Q2',
        5 => 'Q6',
        6 => 'Q7',
        7 => 'Q3',
        8 => 'GND',
        9 => 'Q8',
        10 => 'Q4',
        11 => 'Q9',
        12 => 'CARRY',
        13 => '~CE',
        14 => 'CLOCK',
        15 => 'RESET',
        16 => 'Vcc',
      ),
    ),
  ),
  40193 => 
  array (
    'description' => '4-bit up/down binary counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef40193b.pdf',
    'pins' => 
    array (
      'D1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Q1' => 
      array (
        'desc' => 'count output',
      ),
      'Q0' => 
      array (
        'desc' => 'count output',
      ),
      'CPD' => 
      array (
        'desc' => 'count-down clock input (low-to-high edge-triggered)',
      ),
      'CPU' => 
      array (
        'desc' => 'count-up clock input (low-to-high edge-triggered)',
      ),
      'Q2' => 
      array (
        'desc' => 'count output',
      ),
      'Q3' => 
      array (
        'desc' => 'count output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'D3' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D2' => 
      array (
        'desc' => 'parallel data input',
      ),
      '~PL' => 
      array (
        'desc' => 'parallel load (active low)',
      ),
      '~TCU' => 
      array (
        'desc' => 'terminal count-up (carry; active low)',
      ),
      '~TCD' => 
      array (
        'desc' => 'terminal count-down (borrow; active low)',
      ),
      'MR' => 
      array (
        'desc' => 'master reset',
      ),
      'D0' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => '~TCU goes low when the count is 15.',
      1 => '~TCD goes low when the count is 0.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D1',
        2 => 'Q1',
        3 => 'Q0',
        4 => 'CPD',
        5 => 'CPU',
        6 => 'Q2',
        7 => 'Q3',
        8 => 'GND',
        9 => 'D3',
        10 => 'D2',
        11 => '~PL',
        12 => '~TCU',
        13 => '~TCD',
        14 => 'MR',
        15 => 'D0',
        16 => 'Vcc',
      ),
    ),
  ),
  4020 => 
  array (
    'description' => '14-stage binary counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4020b.pdf',
    'pins' => 
    array (
      'Q11' => 
      array (
        'desc' => 'output',
      ),
      'Q12' => 
      array (
        'desc' => 'output',
      ),
      'Q13' => 
      array (
        'desc' => 'output',
      ),
      'Q5' => 
      array (
        'desc' => 'output',
      ),
      'Q4' => 
      array (
        'desc' => 'output',
      ),
      'Q6' => 
      array (
        'desc' => 'output',
      ),
      'Q3' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q0' => 
      array (
        'desc' => 'output',
      ),
      '~CP' => 
      array (
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      'MR' => 
      array (
        'desc' => 'master reset',
      ),
      'Q8' => 
      array (
        'desc' => 'output',
      ),
      'Q7' => 
      array (
        'desc' => 'output',
      ),
      'Q9' => 
      array (
        'desc' => 'output',
      ),
      'Q10' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q11',
        2 => 'Q12',
        3 => 'Q13',
        4 => 'Q5',
        5 => 'Q4',
        6 => 'Q6',
        7 => 'Q3',
        8 => 'GND',
        9 => 'Q0',
        10 => '~CP',
        11 => 'MR',
        12 => 'Q8',
        13 => 'Q7',
        14 => 'Q9',
        15 => 'Q10',
        16 => 'Vcc',
      ),
    ),
  ),
  4021 => 
  array (
    'description' => '8-bit static shift register',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4021b.pdf',
    'pins' => 
    array (
      'D7' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Q5' => 
      array (
        'desc' => 'output',
      ),
      'Q7' => 
      array (
        'desc' => 'output',
      ),
      'D3' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D0' => 
      array (
        'desc' => 'parallel data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'PL' => 
      array (
        'desc' => 'parallel load',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      'DS' => 
      array (
        'desc' => 'serial data input',
      ),
      'Q6' => 
      array (
        'desc' => 'output',
      ),
      'D4' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D5' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D6' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D7',
        2 => 'Q5',
        3 => 'Q7',
        4 => 'D3',
        5 => 'D2',
        6 => 'D1',
        7 => 'D0',
        8 => 'GND',
        9 => 'PL',
        10 => 'CP',
        11 => 'DS',
        12 => 'Q6',
        13 => 'D4',
        14 => 'D5',
        15 => 'D6',
        16 => 'Vcc',
      ),
    ),
  ),
  4023 => 
  array (
    'description' => 'Triple 3-input NAND gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4023b.pdf',
    'pins' => 
    array (
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3C' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '2A',
        2 => '2B',
        3 => '1A',
        4 => '1B',
        5 => '1C',
        6 => '1Y',
        7 => 'GND',
        8 => '2C',
        9 => '2Y',
        10 => '3Y',
        11 => '3A',
        12 => '3B',
        13 => '3C',
        14 => 'Vcc',
      ),
    ),
  ),
  4024 => 
  array (
    'description' => '7-stage binary ripple counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4024b.pdf',
    'pins' => 
    array (
      '~CP' => 
      array (
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      'MR' => 
      array (
        'desc' => 'master reset',
      ),
      'Q6' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'Q5' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'Q4' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'Q3' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q2' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'Q1' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'Q0' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~CP',
        2 => 'MR',
        3 => 'Q6',
        4 => 'Q5',
        5 => 'Q4',
        6 => 'Q3',
        7 => 'GND',
        8 => 'NC',
        9 => 'Q2',
        10 => 'NC',
        11 => 'Q1',
        12 => 'Q0',
        13 => 'NC',
        14 => 'Vcc',
      ),
    ),
  ),
  4025 => 
  array (
    'description' => 'Triple 3-input NOR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4025b.pdf',
    'pins' => 
    array (
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3C' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '2A',
        2 => '2B',
        3 => '1A',
        4 => '1B',
        5 => '1C',
        6 => '1Y',
        7 => 'GND',
        8 => '2C',
        9 => '2Y',
        10 => '3Y',
        11 => '3A',
        12 => '3B',
        13 => '3C',
        14 => 'Vcc',
      ),
    ),
  ),
  4027 => 
  array (
    'description' => 'Dual J-K flip-flop with set and clear',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4027b.pdf',
    'pins' => 
    array (
      '2Q' => 
      array (
        'desc' => 'true output',
      ),
      '2~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '2CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '2CD' => 
      array (
        'desc' => 'asynchronous clear-direct input',
      ),
      '2K' => 
      array (
        'desc' => 'synchronous input',
      ),
      '2J' => 
      array (
        'desc' => 'synchronous input',
      ),
      '2SD' => 
      array (
        'desc' => 'asynchronous set-direct input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '1SD' => 
      array (
        'desc' => 'asynchronous set-direct input',
      ),
      '1J' => 
      array (
        'desc' => 'asynchronous input',
      ),
      '1K' => 
      array (
        'desc' => 'asynchronous input',
      ),
      '1CD' => 
      array (
        'desc' => 'asynchronous clear-direct input',
      ),
      '1CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '1~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '1Q' => 
      array (
        'desc' => 'true output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '2Q',
        2 => '2~Q',
        3 => '2CP',
        4 => '2CD',
        5 => '2K',
        6 => '2J',
        7 => '2SD',
        8 => 'GND',
        9 => '1SD',
        10 => '1J',
        11 => '1K',
        12 => '1CD',
        13 => '1CP',
        14 => '1~Q',
        15 => '1Q',
        16 => 'Vcc',
      ),
    ),
  ),
  4028 => 
  array (
    'description' => 'BCD to decimal decoder',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4028b.pdf',
    'pins' => 
    array (
      'Y4' => 
      array (
        'desc' => 'output',
      ),
      'Y2' => 
      array (
        'desc' => 'output',
      ),
      'Y0' => 
      array (
        'desc' => 'output',
      ),
      'Y7' => 
      array (
        'desc' => 'output',
      ),
      'Y9' => 
      array (
        'desc' => 'output',
      ),
      'Y5' => 
      array (
        'desc' => 'output',
      ),
      'Y6' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Y8' => 
      array (
        'desc' => 'output',
      ),
      'A0' => 
      array (
        'desc' => 'BCD input',
      ),
      'A3' => 
      array (
        'desc' => 'BCD input',
      ),
      'A2' => 
      array (
        'desc' => 'BCD input',
      ),
      'A1' => 
      array (
        'desc' => 'BCD input',
      ),
      'Y1' => 
      array (
        'desc' => 'output',
      ),
      'Y3' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are active high.',
      1 => 'All outputs are low for BCD inputs greater than 9.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Y4',
        2 => 'Y2',
        3 => 'Y0',
        4 => 'Y7',
        5 => 'Y9',
        6 => 'Y5',
        7 => 'Y6',
        8 => 'GND',
        9 => 'Y8',
        10 => 'A0',
        11 => 'A3',
        12 => 'A2',
        13 => 'A1',
        14 => 'Y1',
        15 => 'Y3',
        16 => 'Vcc',
      ),
    ),
  ),
  4029 => 
  array (
    'description' => 'Synchronous 4-bit up/down binary/decade counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4029b.pdf',
    'pins' => 
    array (
      'PL' => 
      array (
        'desc' => 'parallel load',
      ),
      'Q3' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'P3' => 
      array (
        'desc' => 'parallel data input',
      ),
      'P0' => 
      array (
        'desc' => 'parallel data input',
      ),
      '~CE' => 
      array (
        'desc' => 'count enable (active low)',
      ),
      'Q0' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      '~TC' => 
      array (
        'desc' => 'terminal count output (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'BIN/~DEC' => 
      array (
        'desc' => 'binary/decade control input',
      ),
      'UP/~DN' => 
      array (
        'desc' => 'up/down control input',
      ),
      'Q1' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'P1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'P2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Q2' => 
      array (
        'desc' => 'buffered parallel output',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'PL',
        2 => 'Q3',
        3 => 'P3',
        4 => 'P0',
        5 => '~CE',
        6 => 'Q0',
        7 => '~TC',
        8 => 'GND',
        9 => 'BIN/~DEC',
        10 => 'UP/~DN',
        11 => 'Q1',
        12 => 'P1',
        13 => 'P2',
        14 => 'Q2',
        15 => 'CP',
        16 => 'Vcc',
      ),
    ),
  ),
  4030 => 
  array (
    'description' => 'Quad 2-input XOR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4030b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  4040 => 
  array (
    'description' => '12-stage binary ripple counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4040b.pdf',
    'pins' => 
    array (
      'Q11' => 
      array (
        'desc' => 'output',
      ),
      'Q5' => 
      array (
        'desc' => 'output',
      ),
      'Q4' => 
      array (
        'desc' => 'output',
      ),
      'Q6' => 
      array (
        'desc' => 'output',
      ),
      'Q3' => 
      array (
        'desc' => 'output',
      ),
      'Q2' => 
      array (
        'desc' => 'output',
      ),
      'Q1' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q0' => 
      array (
        'desc' => 'output',
      ),
      '~CP' => 
      array (
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      'MR' => 
      array (
        'desc' => 'master reset (active high)',
      ),
      'Q8' => 
      array (
        'desc' => 'output',
      ),
      'Q7' => 
      array (
        'desc' => 'output',
      ),
      'Q9' => 
      array (
        'desc' => 'output',
      ),
      'Q10' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q11',
        2 => 'Q5',
        3 => 'Q4',
        4 => 'Q6',
        5 => 'Q3',
        6 => 'Q2',
        7 => 'Q1',
        8 => 'GND',
        9 => 'Q0',
        10 => '~CP',
        11 => 'MR',
        12 => 'Q8',
        13 => 'Q7',
        14 => 'Q9',
        15 => 'Q10',
        16 => 'Vcc',
      ),
    ),
  ),
  4046 => 
  array (
    'description' => 'Phase-locked loop',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4046b.pdf',
    'pins' => 
    array (
      'PCP__OUT' => 
      array (
        'desc' => 'phase comparator pulse output',
      ),
      'PC1__OUT' => 
      array (
        'desc' => 'phase comparator 1 output',
      ),
      'COMP__IN' => 
      array (
        'desc' => 'comparator input',
      ),
      'VCO__OUT' => 
      array (
        'desc' => 'VCO output',
      ),
      'INH' => 
      array (
        'desc' => 'inhibit',
      ),
      'C1__A' => 
      array (
        'desc' => 'capacitor C1 connection A',
      ),
      'C1__B' => 
      array (
        'desc' => 'capacitor C1 Connection B',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'VCO__IN' => 
      array (
        'desc' => 'VCO input',
      ),
      'SF__OUT' => 
      array (
        'desc' => 'source-follower output',
      ),
      'R__1' => 
      array (
        'desc' => 'resistor R1 connection',
      ),
      'R__2' => 
      array (
        'desc' => 'resistor R2 connection',
      ),
      'PC2__OUT' => 
      array (
        'desc' => 'phase comparator 2 output',
      ),
      'SIGN__IN' => 
      array (
        'desc' => 'signal input',
      ),
      'ZENER' => 
      array (
        'desc' => 'zener diode input for regulated supply',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'PCP__OUT',
        2 => 'PC1__OUT',
        3 => 'COMP__IN',
        4 => 'VCO__OUT',
        5 => 'INH',
        6 => 'C1__A',
        7 => 'C1__B',
        8 => 'GND',
        9 => 'VCO__IN',
        10 => 'SF__OUT',
        11 => 'R__1',
        12 => 'R__2',
        13 => 'PC2__OUT',
        14 => 'SIGN__IN',
        15 => 'ZENER',
        16 => 'Vcc',
      ),
    ),
  ),
  4047 => 
  array (
    'description' => 'Monostable/astable multivibrator',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4047b.pdf',
    'pins' => 
    array (
      'C' => 
      array (
        'desc' => 'capacitor connection',
      ),
      'R' => 
      array (
        'desc' => 'resistor connection',
      ),
      'RC COMMON' => 
      array (
        'desc' => 'resistor and capacitor common connection',
      ),
      '~ASTABLE' => 
      array (
        'desc' => 'astable enable (active low)',
      ),
      'ASTABLE' => 
      array (
        'desc' => 'astable enable (active high)',
      ),
      '-TRIGGER' => 
      array (
        'desc' => 'monostable negative-edge trigger',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '+TRIGGER' => 
      array (
        'desc' => 'monostable positive-edge trigger',
      ),
      'RESET' => 
      array (
        'desc' => 'external reset',
      ),
      'Q' => 
      array (
        'desc' => 'output',
      ),
      '~Q' => 
      array (
        'desc' => 'complement output',
      ),
      'RETRIGGER' => 
      array (
        'desc' => 'monostable retrigger input',
      ),
      'OSC OUT' => 
      array (
        'desc' => 'oscillator (double frequency) output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'C',
        2 => 'R',
        3 => 'RC COMMON',
        4 => '~ASTABLE',
        5 => 'ASTABLE',
        6 => '-TRIGGER',
        7 => 'GND',
        8 => '+TRIGGER',
        9 => 'RESET',
        10 => 'Q',
        11 => '~Q',
        12 => 'RETRIGGER',
        13 => 'OSC OUT',
        14 => 'Vcc',
      ),
    ),
  ),
  4049 => 
  array (
    'description' => 'Hex inverting buffer',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4049b.pdf',
    'pins' => 
    array (
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'data output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'data output',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Vcc',
        2 => '1Y',
        3 => '1A',
        4 => '2Y',
        5 => '2A',
        6 => '3Y',
        7 => '3A',
        8 => 'GND',
        9 => '4A',
        10 => '4Y',
        11 => '5A',
        12 => '5Y',
        13 => 'NC',
        14 => '6A',
        15 => '6Y',
        16 => 'NC',
      ),
    ),
  ),
  4050 => 
  array (
    'description' => 'Hex non-inverting buffer',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4050b.pdf',
    'pins' => 
    array (
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'data output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'data output',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Vcc',
        2 => '1Y',
        3 => '1A',
        4 => '2Y',
        5 => '2A',
        6 => '3Y',
        7 => '3A',
        8 => 'GND',
        9 => '4A',
        10 => '4Y',
        11 => '5A',
        12 => '5Y',
        13 => 'NC',
        14 => '6A',
        15 => '6Y',
        16 => 'NC',
      ),
    ),
  ),
  4051 => 
  array (
    'description' => '8-channel analog multiplexer/demultiplexer',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4051b.pdf',
    'pins' => 
    array (
      'Y4' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y6' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Z' => 
      array (
        'desc' => 'common input/output',
      ),
      'Y7' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y5' => 
      array (
        'desc' => 'independent input/output',
      ),
      '~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'V__EE' => 
      array (
        'desc' => 'switch negative supply voltage',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'A2' => 
      array (
        'desc' => 'address input',
      ),
      'A1' => 
      array (
        'desc' => 'address input',
      ),
      'A0' => 
      array (
        'desc' => 'address input',
      ),
      'Y3' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y0' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y1' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y2' => 
      array (
        'desc' => 'independent input/output',
      ),
      'V__CC' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The device contains eight bidirectional analog switches.',
      1 => 'The analog inputs/outputs can swing between V__CC and V__EE.',
      2 => 'When ~E is high, all switches are in a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Y4',
        2 => 'Y6',
        3 => 'Z',
        4 => 'Y7',
        5 => 'Y5',
        6 => '~E',
        7 => 'V__EE',
        8 => 'GND',
        9 => 'A2',
        10 => 'A1',
        11 => 'A0',
        12 => 'Y3',
        13 => 'Y0',
        14 => 'Y1',
        15 => 'Y2',
        16 => 'V__CC',
      ),
    ),
  ),
  4052 => 
  array (
    'description' => 'Dual 4-channel analog multiplexer/demultiplexer',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4052b.pdf',
    'pins' => 
    array (
      'Y__0B' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y__2B' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Z__B' => 
      array (
        'desc' => 'common input/output',
      ),
      'Y__3B' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y__1B' => 
      array (
        'desc' => 'independent input/output',
      ),
      '~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'V__EE' => 
      array (
        'desc' => 'switch negative supply voltage',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'A__1' => 
      array (
        'desc' => 'address input',
      ),
      'A__0' => 
      array (
        'desc' => 'address input',
      ),
      'Y__3A' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y__0A' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Z__A' => 
      array (
        'desc' => 'common input/output',
      ),
      'Y__1A' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y__2A' => 
      array (
        'desc' => 'independent input/output',
      ),
      'V__CC' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The device contains four bidirectional analog switches.',
      1 => 'The analog inputs/outputs can swing between V__CC and V__EE.',
      2 => 'When E is high, all switches are in a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Y__0B',
        2 => 'Y__2B',
        3 => 'Z__B',
        4 => 'Y__3B',
        5 => 'Y__1B',
        6 => '~E',
        7 => 'V__EE',
        8 => 'GND',
        9 => 'A__1',
        10 => 'A__0',
        11 => 'Y__3A',
        12 => 'Y__0A',
        13 => 'Z__A',
        14 => 'Y__1A',
        15 => 'Y__2A',
        16 => 'V__CC',
      ),
    ),
  ),
  4053 => 
  array (
    'description' => 'Triple 2-channel analog multiplexer/demultiplexer (triple SPDT analog switch)',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4053b.pdf',
    'pins' => 
    array (
      'Y__1B' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y__0B' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y__1C' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Z__C' => 
      array (
        'desc' => 'common input/output',
      ),
      'Y__0C' => 
      array (
        'desc' => 'independent input/output',
      ),
      '~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'V__EE' => 
      array (
        'desc' => 'switch negative supply voltage',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'S__C' => 
      array (
        'desc' => 'select input',
      ),
      'S__B' => 
      array (
        'desc' => 'select input',
      ),
      'S__A' => 
      array (
        'desc' => 'select input',
      ),
      'Y__0A' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y__1A' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Z__A' => 
      array (
        'desc' => 'common input/output',
      ),
      'Z__B' => 
      array (
        'desc' => 'common input/output',
      ),
      'V__CC' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Each multiplexer/demultiplexer contains two bidirectional analog switches.',
      1 => 'The analog inputs/outputs can swing between V__CC and V__EE.',
      2 => 'When E is high, all switches are in a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Y__1B',
        2 => 'Y__0B',
        3 => 'Y__1C',
        4 => 'Z__C',
        5 => 'Y__0C',
        6 => '~E',
        7 => 'V__EE',
        8 => 'GND',
        9 => 'S__C',
        10 => 'S__B',
        11 => 'S__A',
        12 => 'Y__0A',
        13 => 'Y__1A',
        14 => 'Z__A',
        15 => 'Z__B',
        16 => 'V__CC',
      ),
    ),
  ),
  4060 => 
  array (
    'description' => '14-stage ripple-carry binary counter/divider and oscillator',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4060b.pdf',
    'pins' => 
    array (
      'Q11' => 
      array (
        'desc' => 'counter output',
      ),
      'Q12' => 
      array (
        'desc' => 'counter output',
      ),
      'Q13' => 
      array (
        'desc' => 'counter output',
      ),
      'Q5' => 
      array (
        'desc' => 'counter output',
      ),
      'Q4' => 
      array (
        'desc' => 'counter output',
      ),
      'Q6' => 
      array (
        'desc' => 'counter output',
      ),
      'Q3' => 
      array (
        'desc' => 'counter output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'C__TC' => 
      array (
        'desc' => 'external capacitor connection',
      ),
      'R__TC' => 
      array (
        'desc' => 'oscillator pin',
      ),
      'RS' => 
      array (
        'desc' => 'clock input/oscillator pin (high-to-low edge-triggered)',
      ),
      'MR' => 
      array (
        'desc' => 'master reset (active high)',
      ),
      'Q__8' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__7' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__9' => 
      array (
        'desc' => 'counter output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q11',
        2 => 'Q12',
        3 => 'Q13',
        4 => 'Q5',
        5 => 'Q4',
        6 => 'Q6',
        7 => 'Q3',
        8 => 'GND',
        9 => 'C__TC',
        10 => 'R__TC',
        11 => 'RS',
        12 => 'MR',
        13 => 'Q__8',
        14 => 'Q__7',
        15 => 'Q__9',
        16 => 'Vcc',
      ),
    ),
  ),
  4066 => 
  array (
    'description' => 'Quad bilateral switch',
    'family' => '4000',
    'datasheet' => 'http://www.datasheetcatalog.org/datasheets/320/206765_DS.pdf',
    'pins' => 
    array (
      'IN 1' => 
      array (
        'desc' => 'switch 1 input',
      ),
      'OUT 1' => 
      array (
        'desc' => 'switch 1 output',
      ),
      'OUT 2' => 
      array (
        'desc' => 'switch 2 output',
      ),
      'IN 2' => 
      array (
        'desc' => 'switch 2 input',
      ),
      'CONTROL 2' => 
      array (
        'desc' => 'switch 2 control',
      ),
      'CONTROL 3' => 
      array (
        'desc' => 'switch 3 control',
      ),
      'V__SS' => 
      array (
        'desc' => 'ground/negative supply voltage',
      ),
      'IN 3' => 
      array (
        'desc' => 'switch 3 input',
      ),
      'OUT 3' => 
      array (
        'desc' => 'switch 3 output',
      ),
      'OUT 4' => 
      array (
        'desc' => 'switch 4 output',
      ),
      'IN 4' => 
      array (
        'desc' => 'switch 4 input',
      ),
      'CONTROL 4' => 
      array (
        'desc' => 'switch 4 control',
      ),
      'CONTROL 1' => 
      array (
        'desc' => 'switch 1 control',
      ),
      'V__DD' => 
      array (
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum switching frequency',
        'val' => '40',
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '18',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum switch through current',
        'val' => '± 25',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'IN 1',
        2 => 'OUT 1',
        3 => 'OUT 2',
        4 => 'IN 2',
        5 => 'CONTROL 2',
        6 => 'CONTROL 3',
        7 => 'V__SS',
        8 => 'IN 3',
        9 => 'OUT 3',
        10 => 'OUT 4',
        11 => 'IN 4',
        12 => 'CONTROL 4',
        13 => 'CONTROL 1',
        14 => 'V__DD',
      ),
    ),
  ),
  4067 => 
  array (
    'description' => '16-channel analog multiplexer/demultiplexer',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4067b.pdf',
    'pins' => 
    array (
      'Z' => 
      array (
        'desc' => 'common input/output',
      ),
      'Y7' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y6' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y5' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y4' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y3' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y2' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y1' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y0' => 
      array (
        'desc' => 'independent input/output',
      ),
      'A0' => 
      array (
        'desc' => 'address input',
      ),
      'A1' => 
      array (
        'desc' => 'address input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'A3' => 
      array (
        'desc' => 'address input',
      ),
      'A2' => 
      array (
        'desc' => 'address input',
      ),
      '~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'Y15' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y14' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y13' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y12' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y11' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y10' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y9' => 
      array (
        'desc' => 'independent input/output',
      ),
      'Y8' => 
      array (
        'desc' => 'independent input/output',
      ),
      'V__CC' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The device contains sixteen bidirectional analog switches.',
      1 => 'The analog inputs/outputs can swing between V__CC and GND.',
      2 => 'When ~E is high, all switches are in a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Z',
        2 => 'Y7',
        3 => 'Y6',
        4 => 'Y5',
        5 => 'Y4',
        6 => 'Y3',
        7 => 'Y2',
        8 => 'Y1',
        9 => 'Y0',
        10 => 'A0',
        11 => 'A1',
        12 => 'GND',
        13 => 'A3',
        14 => 'A2',
        15 => '~E',
        16 => 'Y15',
        17 => 'Y14',
        18 => 'Y13',
        19 => 'Y12',
        20 => 'Y11',
        21 => 'Y10',
        22 => 'Y9',
        23 => 'Y8',
        24 => 'V__CC',
      ),
    ),
  ),
  4068 => 
  array (
    'description' => '8-input NAND gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4068b.pdf',
    'pins' => 
    array (
      'I__0' => 
      array (
        'desc' => 'data input',
      ),
      'I__1' => 
      array (
        'desc' => 'data input',
      ),
      'I__2' => 
      array (
        'desc' => 'data input',
      ),
      'I__3' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'I__4' => 
      array (
        'desc' => 'data input',
      ),
      'I__5' => 
      array (
        'desc' => 'data input',
      ),
      'I__6' => 
      array (
        'desc' => 'data input',
      ),
      'I__7' => 
      array (
        'desc' => 'data input',
      ),
      'Y' => 
      array (
        'desc' => 'data output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'NC',
        2 => 'I__0',
        3 => 'I__1',
        4 => 'I__2',
        5 => 'I__3',
        6 => 'NC',
        7 => 'GND',
        8 => 'NC',
        9 => 'I__4',
        10 => 'I__5',
        11 => 'I__6',
        12 => 'I__7',
        13 => 'Y',
        14 => 'Vcc',
      ),
    ),
  ),
  4069 => 
  array (
    'description' => 'Hex inverter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4069ub.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'data output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'data output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1Y',
        3 => '2A',
        4 => '2Y',
        5 => '3A',
        6 => '3Y',
        7 => 'GND',
        8 => '4Y',
        9 => '4A',
        10 => '5Y',
        11 => '5A',
        12 => '6Y',
        13 => '6A',
        14 => 'Vcc',
      ),
    ),
  ),
  4070 => 
  array (
    'description' => 'Quad 2-input XOR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4070b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  4071 => 
  array (
    'description' => 'Quad 2-input OR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4071b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  4072 => 
  array (
    'description' => 'Dual 4-input OR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4072b.pdf',
    'pins' => 
    array (
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1Y',
        2 => '1A',
        3 => '1B',
        4 => '1C',
        5 => '1D',
        6 => 'NC',
        7 => 'GND',
        8 => 'NC',
        9 => '2A',
        10 => '2B',
        11 => '2C',
        12 => '2D',
        13 => '2Y',
        14 => 'Vcc',
      ),
    ),
  ),
  4073 => 
  array (
    'description' => 'Triple 3-input AND gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4073b.pdf',
    'pins' => 
    array (
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3C' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '2A',
        2 => '2B',
        3 => '1A',
        4 => '1B',
        5 => '1C',
        6 => '1Y',
        7 => 'GND',
        8 => '2C',
        9 => '2Y',
        10 => '3Y',
        11 => '3A',
        12 => '3B',
        13 => '3C',
        14 => 'Vcc',
      ),
    ),
  ),
  4075 => 
  array (
    'description' => 'Triple 3-input OR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4075b.pdf',
    'pins' => 
    array (
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3C' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '2A',
        2 => '2B',
        3 => '1A',
        4 => '1B',
        5 => '1C',
        6 => '1Y',
        7 => 'GND',
        8 => '2C',
        9 => '2Y',
        10 => '3Y',
        11 => '3A',
        12 => '3B',
        13 => '3C',
        14 => 'Vcc',
      ),
    ),
  ),
  4077 => 
  array (
    'description' => 'Quad 2-input XNOR gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4077b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  4081 => 
  array (
    'description' => 'Quad 2-input AND gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4081b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  4082 => 
  array (
    'description' => 'Dual 4-input AND gate',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4082b.pdf',
    'pins' => 
    array (
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1Y',
        2 => '1A',
        3 => '1B',
        4 => '1C',
        5 => '1D',
        6 => 'NC',
        7 => 'GND',
        8 => 'NC',
        9 => '2A',
        10 => '2B',
        11 => '2C',
        12 => '2D',
        13 => '2Y',
        14 => 'Vcc',
      ),
    ),
  ),
  4085 => 
  array (
    'description' => 'Dual 2-wide 2-input AND-OR-INVERT gate',
    'family' => '4000',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/cd4085b.pdf',
    'pins' => 
    array (
      'A1' => 
      array (
        'desc' => 'data input',
      ),
      'B1' => 
      array (
        'desc' => 'data input',
      ),
      'Q1' => 
      array (
        'desc' => 'data output (see note)',
      ),
      'Q2' => 
      array (
        'desc' => 'data output (see note)',
      ),
      'A2' => 
      array (
        'desc' => 'data input',
      ),
      'B2' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'C2' => 
      array (
        'desc' => 'data input',
      ),
      'D2' => 
      array (
        'desc' => 'data input',
      ),
      'INH1' => 
      array (
        'desc' => 'inhibit',
      ),
      'INH2' => 
      array (
        'desc' => 'inhibit',
      ),
      'C1' => 
      array (
        'desc' => 'data input',
      ),
      'D1' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Q = <span class=\'neg\'>INH OR (A AND B) OR (C AND D)</span>',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A1',
        2 => 'B1',
        3 => 'Q1',
        4 => 'Q2',
        5 => 'A2',
        6 => 'B2',
        7 => 'GND',
        8 => 'C2',
        9 => 'D2',
        10 => 'INH1',
        11 => 'INH2',
        12 => 'C1',
        13 => 'D1',
        14 => 'Vcc',
      ),
    ),
  ),
  4093 => 
  array (
    'description' => 'Quad 2-input NAND Schmitt trigger',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4093b.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  4094 => 
  array (
    'description' => '8-stage shift-and-store bus register',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4094b.pdf',
    'pins' => 
    array (
      'STR' => 
      array (
        'desc' => 'strobe input (active high)',
      ),
      'D' => 
      array (
        'desc' => 'data input',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      'QP0' => 
      array (
        'desc' => 'parallel output',
      ),
      'QP1' => 
      array (
        'desc' => 'parallel output',
      ),
      'QP2' => 
      array (
        'desc' => 'parallel output',
      ),
      'QP3' => 
      array (
        'desc' => 'parallel output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'QS1' => 
      array (
        'desc' => 'serial output',
      ),
      'QS2' => 
      array (
        'desc' => 'serial output',
      ),
      'QP7' => 
      array (
        'desc' => 'parallel output',
      ),
      'QP6' => 
      array (
        'desc' => 'parallel output',
      ),
      'QP5' => 
      array (
        'desc' => 'parallel output',
      ),
      'QP4' => 
      array (
        'desc' => 'parallel output',
      ),
      'OE' => 
      array (
        'desc' => 'output enable',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage (active high)',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'STR',
        2 => 'D',
        3 => 'CP',
        4 => 'QP0',
        5 => 'QP1',
        6 => 'QP2',
        7 => 'QP3',
        8 => 'GND',
        9 => 'QS1',
        10 => 'QS2',
        11 => 'QP7',
        12 => 'QP6',
        13 => 'QP5',
        14 => 'QP4',
        15 => 'OE',
        16 => 'Vcc',
      ),
    ),
  ),
  4099 => 
  array (
    'description' => '8-bit addressable latch',
    'family' => '4000',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/cd4099b.pdf',
    'pins' => 
    array (
      'Q7' => 
      array (
        'desc' => 'latch output',
      ),
      'RESET' => 
      array (
        'desc' => 'master reset (all bits to 0; active high)',
      ),
      'DATA' => 
      array (
        'desc' => 'data input',
      ),
      '~WRITE' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'A0' => 
      array (
        'desc' => 'address input',
      ),
      'A1' => 
      array (
        'desc' => 'address input',
      ),
      'A2' => 
      array (
        'desc' => 'address input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q0' => 
      array (
        'desc' => 'latch output',
      ),
      'Q1' => 
      array (
        'desc' => 'latch output',
      ),
      'Q2' => 
      array (
        'desc' => 'latch output',
      ),
      'Q3' => 
      array (
        'desc' => 'latch output',
      ),
      'Q4' => 
      array (
        'desc' => 'latch output',
      ),
      'Q5' => 
      array (
        'desc' => 'latch output',
      ),
      'Q6' => 
      array (
        'desc' => 'latch output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q7',
        2 => 'RESET',
        3 => 'DATA',
        4 => '~WRITE',
        5 => 'A0',
        6 => 'A1',
        7 => 'A2',
        8 => 'GND',
        9 => 'Q0',
        10 => 'Q1',
        11 => 'Q2',
        12 => 'Q3',
        13 => 'Q4',
        14 => 'Q5',
        15 => 'Q6',
        16 => 'Vcc',
      ),
    ),
  ),
  4511 => 
  array (
    'description' => 'BCD to 7-segment latch/decoder/driver',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4511b.pdf',
    'pins' => 
    array (
      'D1' => 
      array (
        'desc' => 'BCD input',
      ),
      'D2' => 
      array (
        'desc' => 'BCD input',
      ),
      '~LT' => 
      array (
        'desc' => 'lamp test (lights all segments, active low)',
      ),
      '~BL' => 
      array (
        'desc' => 'blank (active low)',
      ),
      'LE' => 
      array (
        'desc' => 'latch enable (active high)',
      ),
      'D3' => 
      array (
        'desc' => 'BCD input',
      ),
      'D0' => 
      array (
        'desc' => 'BCD input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Qe' => 
      array (
        'desc' => 'segment output',
      ),
      'Qd' => 
      array (
        'desc' => 'segment output',
      ),
      'Qc' => 
      array (
        'desc' => 'segment output',
      ),
      'Qb' => 
      array (
        'desc' => 'segment output',
      ),
      'Qa' => 
      array (
        'desc' => 'segment output',
      ),
      'Qf' => 
      array (
        'desc' => 'segment output',
      ),
      'Qg' => 
      array (
        'desc' => 'segment output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Pins for lit segments are high. The 4511 can directly drive a common cathode LED display.',
      1 => 'Display is blanked for inputs greater than 9.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D1',
        2 => 'D2',
        3 => '~LT',
        4 => '~BL',
        5 => 'LE',
        6 => 'D3',
        7 => 'D0',
        8 => 'GND',
        9 => 'Qe',
        10 => 'Qd',
        11 => 'Qc',
        12 => 'Qb',
        13 => 'Qa',
        14 => 'Qf',
        15 => 'Qg',
        16 => 'Vcc',
      ),
    ),
  ),
  4514 => 
  array (
    'description' => '1-of-16 decoder/demultiplexer with input latches',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4514b.pdf',
    'pins' => 
    array (
      'LE' => 
      array (
        'desc' => 'latch enable (active high)',
      ),
      'A0' => 
      array (
        'desc' => 'address input',
      ),
      'A1' => 
      array (
        'desc' => 'address input',
      ),
      'Q7' => 
      array (
        'desc' => 'output',
      ),
      'Q6' => 
      array (
        'desc' => 'output',
      ),
      'Q5' => 
      array (
        'desc' => 'output',
      ),
      'Q4' => 
      array (
        'desc' => 'output',
      ),
      'Q3' => 
      array (
        'desc' => 'output',
      ),
      'Q1' => 
      array (
        'desc' => 'output',
      ),
      'Q2' => 
      array (
        'desc' => 'output',
      ),
      'Q0' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q13' => 
      array (
        'desc' => 'output',
      ),
      'Q12' => 
      array (
        'desc' => 'output',
      ),
      'Q15' => 
      array (
        'desc' => 'output',
      ),
      'Q14' => 
      array (
        'desc' => 'output',
      ),
      'Q9' => 
      array (
        'desc' => 'output',
      ),
      'Q8' => 
      array (
        'desc' => 'output',
      ),
      'Q11' => 
      array (
        'desc' => 'output',
      ),
      'Q10' => 
      array (
        'desc' => 'output',
      ),
      'A2' => 
      array (
        'desc' => 'address input',
      ),
      'A3' => 
      array (
        'desc' => 'address input',
      ),
      '~E' => 
      array (
        'desc' => 'enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are mutually exclusive active high.',
      1 => 'When ~E is high, all outputs are low.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'LE',
        2 => 'A0',
        3 => 'A1',
        4 => 'Q7',
        5 => 'Q6',
        6 => 'Q5',
        7 => 'Q4',
        8 => 'Q3',
        9 => 'Q1',
        10 => 'Q2',
        11 => 'Q0',
        12 => 'GND',
        13 => 'Q13',
        14 => 'Q12',
        15 => 'Q15',
        16 => 'Q14',
        17 => 'Q9',
        18 => 'Q8',
        19 => 'Q11',
        20 => 'Q10',
        21 => 'A2',
        22 => 'A3',
        23 => '~E',
        24 => 'Vcc',
      ),
    ),
  ),
  4515 => 
  array (
    'description' => '1-of-16 decoder/demultiplexer with input latches; inverting',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4515b.pdf',
    'pins' => 
    array (
      'LE' => 
      array (
        'desc' => 'latch enable (active high)',
      ),
      'A0' => 
      array (
        'desc' => 'address input',
      ),
      'A1' => 
      array (
        'desc' => 'address input',
      ),
      '~Q~7' => 
      array (
        'desc' => 'output',
      ),
      '~Q~6' => 
      array (
        'desc' => 'output',
      ),
      '~Q~5' => 
      array (
        'desc' => 'output',
      ),
      '~Q~4' => 
      array (
        'desc' => 'output',
      ),
      '~Q~3' => 
      array (
        'desc' => 'output',
      ),
      '~Q~1' => 
      array (
        'desc' => 'output',
      ),
      '~Q~2' => 
      array (
        'desc' => 'output',
      ),
      '~Q~0' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~Q~13' => 
      array (
        'desc' => 'output',
      ),
      '~Q~12' => 
      array (
        'desc' => 'output',
      ),
      '~Q~15' => 
      array (
        'desc' => 'output',
      ),
      '~Q~14' => 
      array (
        'desc' => 'output',
      ),
      '~Q~9' => 
      array (
        'desc' => 'output',
      ),
      '~Q~8' => 
      array (
        'desc' => 'output',
      ),
      '~Q~11' => 
      array (
        'desc' => 'output',
      ),
      '~Q~10' => 
      array (
        'desc' => 'output',
      ),
      'A2' => 
      array (
        'desc' => 'address input',
      ),
      'A3' => 
      array (
        'desc' => 'address input',
      ),
      '~E' => 
      array (
        'desc' => 'enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are mutually exclusive active low.',
      1 => 'When ~E is high, all outputs are high.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'LE',
        2 => 'A0',
        3 => 'A1',
        4 => '~Q~7',
        5 => '~Q~6',
        6 => '~Q~5',
        7 => '~Q~4',
        8 => '~Q~3',
        9 => '~Q~1',
        10 => '~Q~2',
        11 => '~Q~0',
        12 => 'GND',
        13 => '~Q~13',
        14 => '~Q~12',
        15 => '~Q~15',
        16 => '~Q~14',
        17 => '~Q~9',
        18 => '~Q~8',
        19 => '~Q~11',
        20 => '~Q~10',
        21 => 'A2',
        22 => 'A3',
        23 => '~E',
        24 => 'Vcc',
      ),
    ),
  ),
  4516 => 
  array (
    'description' => '4-bit binary up/down counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4516b.pdf',
    'pins' => 
    array (
      'PL' => 
      array (
        'desc' => 'parallel load (active high)',
      ),
      'Q3' => 
      array (
        'desc' => 'count output',
      ),
      'D3' => 
      array (
        'desc' => 'parallel input',
      ),
      'D0' => 
      array (
        'desc' => 'parallel input',
      ),
      '~CE' => 
      array (
        'desc' => 'count enable (active low)',
      ),
      'Q0' => 
      array (
        'desc' => 'count output',
      ),
      '~TC' => 
      array (
        'desc' => 'terminal count output (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'MR' => 
      array (
        'desc' => 'master reset (active high)',
      ),
      'UP/~DN' => 
      array (
        'desc' => 'up/down count control',
      ),
      'Q1' => 
      array (
        'desc' => 'count output',
      ),
      'D1' => 
      array (
        'desc' => 'parallel input',
      ),
      'D2' => 
      array (
        'desc' => 'parallel input',
      ),
      'Q2' => 
      array (
        'desc' => 'count output',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'When counting up, ~TC goes low when the count is 15.',
      1 => 'When counting down, ~TC goes low when the count is 0.',
      2 => '~TC is always high when ~CE is high (counting is disabled).',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'PL',
        2 => 'Q3',
        3 => 'D3',
        4 => 'D0',
        5 => '~CE',
        6 => 'Q0',
        7 => '~TC',
        8 => 'GND',
        9 => 'MR',
        10 => 'UP/~DN',
        11 => 'Q1',
        12 => 'D1',
        13 => 'D2',
        14 => 'Q2',
        15 => 'CP',
        16 => 'Vcc',
      ),
    ),
  ),
  4518 => 
  array (
    'description' => 'Dual synchronous BCD counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4518b.pdf',
    'pins' => 
    array (
      '1CP0' => 
      array (
        'desc' => 'counter 1 clock input (low-to-high triggered)',
      ),
      '1~CP~1' => 
      array (
        'desc' => 'counter 1 clock input (high-to-low triggered)',
      ),
      '1Q0' => 
      array (
        'desc' => 'counter 1 output',
      ),
      '1Q1' => 
      array (
        'desc' => 'counter 1 output',
      ),
      '1Q2' => 
      array (
        'desc' => 'counter 1 output',
      ),
      '1Q3' => 
      array (
        'desc' => 'counter 1 output',
      ),
      '1MR' => 
      array (
        'desc' => 'counter 1 master reset (active high)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2CP0' => 
      array (
        'desc' => 'counter 2 clock input (low-to-high triggered)',
      ),
      '2~CP~1' => 
      array (
        'desc' => 'counter 2 clock input (high-to-low triggered)',
      ),
      '2Q0' => 
      array (
        'desc' => 'counter 2 output',
      ),
      '2Q1' => 
      array (
        'desc' => 'counter 2 output',
      ),
      '2Q2' => 
      array (
        'desc' => 'counter 2 output',
      ),
      '2Q3' => 
      array (
        'desc' => 'counter 2 output',
      ),
      '2MR' => 
      array (
        'desc' => 'counter 2 master reset (active high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The 4518 counts from 0 to 9. The 4520 is identical but counts from 0 to 15.',
      1 => 'Either nCP0 or n~CP~1 may be used as the clock input; the other can be used as a clock enable input.',
      2 => 'If n~CP~1 is high, the counter advances on a low-to-high transition of nCP0.',
      3 => 'If nCP0 is low, the counter advances on a high-to-low transition of n~CP~1.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1CP0',
        2 => '1~CP~1',
        3 => '1Q0',
        4 => '1Q1',
        5 => '1Q2',
        6 => '1Q3',
        7 => '1MR',
        8 => 'GND',
        9 => '2CP0',
        10 => '2~CP~1',
        11 => '2Q0',
        12 => '2Q1',
        13 => '2Q2',
        14 => '2Q3',
        15 => '2MR',
        16 => 'Vcc',
      ),
    ),
  ),
  4520 => 
  array (
    'description' => 'Dual 4-bit synchronous binary counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4520b.pdf',
    'pins' => 
    array (
      '1CP0' => 
      array (
        'desc' => 'counter 1 clock input (low-to-high triggered)',
      ),
      '1~CP~1' => 
      array (
        'desc' => 'counter 1 clock input (high-to-low triggered)',
      ),
      '1Q0' => 
      array (
        'desc' => 'counter 1 output',
      ),
      '1Q1' => 
      array (
        'desc' => 'counter 1 output',
      ),
      '1Q2' => 
      array (
        'desc' => 'counter 1 output',
      ),
      '1Q3' => 
      array (
        'desc' => 'counter 1 output',
      ),
      '1MR' => 
      array (
        'desc' => 'counter 1 master reset (active high)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2CP0' => 
      array (
        'desc' => 'counter 2 clock input (low-to-high triggered)',
      ),
      '2~CP~1' => 
      array (
        'desc' => 'counter 2 clock input (high-to-low triggered)',
      ),
      '2Q0' => 
      array (
        'desc' => 'counter 2 output',
      ),
      '2Q1' => 
      array (
        'desc' => 'counter 2 output',
      ),
      '2Q2' => 
      array (
        'desc' => 'counter 2 output',
      ),
      '2Q3' => 
      array (
        'desc' => 'counter 2 output',
      ),
      '2MR' => 
      array (
        'desc' => 'counter 2 master reset (active high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The 4520 counts from 0 to 15. The 4518 is identical but counts from 0 to 9.',
      1 => 'Either nCP0 or n~CP~1 may be used as the clock input; the other can be used as a clock enable input.',
      2 => 'If n~CP~1 is high, the counter advances on a low-to-high transition of nCP0.',
      3 => 'If nCP0 is low, the counter advances on a high-to-low transition of n~CP~1.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1CP0',
        2 => '1~CP~1',
        3 => '1Q0',
        4 => '1Q1',
        5 => '1Q2',
        6 => '1Q3',
        7 => '1MR',
        8 => 'GND',
        9 => '2CP0',
        10 => '2~CP~1',
        11 => '2Q0',
        12 => '2Q1',
        13 => '2Q2',
        14 => '2Q3',
        15 => '2MR',
        16 => 'Vcc',
      ),
    ),
  ),
  4526 => 
  array (
    'description' => 'Programmable 4-bit binary down counter',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4526b.pdf',
    'pins' => 
    array (
      'Q3' => 
      array (
        'desc' => 'count output',
      ),
      'P3' => 
      array (
        'desc' => 'parallel input',
      ),
      'PL' => 
      array (
        'desc' => 'parallel load (active high)',
      ),
      '~CP~1' => 
      array (
        'desc' => 'clock input (high-to-low triggered)',
      ),
      'P0' => 
      array (
        'desc' => 'parallel input',
      ),
      'CP0' => 
      array (
        'desc' => 'clock input (low-to-high triggered)',
      ),
      'Q0' => 
      array (
        'desc' => 'count output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q1' => 
      array (
        'desc' => 'count output',
      ),
      'MR' => 
      array (
        'desc' => 'asynchronous master reset (active high)',
      ),
      'P1' => 
      array (
        'desc' => 'parallel input',
      ),
      'TC' => 
      array (
        'desc' => 'terminal count output',
      ),
      'CF' => 
      array (
        'desc' => 'cascade feedback input',
      ),
      'P2' => 
      array (
        'desc' => 'parallel input',
      ),
      'Q2' => 
      array (
        'desc' => 'count output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'When ~CP~1 is low, the counter advances on a low-to-high transition of CP0.',
      1 => 'When CP0 is high, the counter advances on a high-to-low transition of ~CP~1.',
      2 => 'TC goes high when the count is 0, CF is high, and PL is low.',
      3 => 'For a single-stage divide-by-n circuit, connect the TC output to PL and set the P0-P3 inputs to n.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q3',
        2 => 'P3',
        3 => 'PL',
        4 => '~CP~1',
        5 => 'P0',
        6 => 'CP0',
        7 => 'Q0',
        8 => 'GND',
        9 => 'Q1',
        10 => 'MR',
        11 => 'P1',
        12 => 'TC',
        13 => 'CF',
        14 => 'P2',
        15 => 'Q2',
        16 => 'Vcc',
      ),
    ),
  ),
  4528 => 
  array (
    'description' => 'Dual retriggerable monostable multivibrator with reset',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4528b.pdf',
    'pins' => 
    array (
      '1CEXT' => 
      array (
        'desc' => 'external capacitor connection (connect to capacitor and ground)',
      ),
      '1REXT/CEXT' => 
      array (
        'desc' => 'external capacitor/resistor connection',
      ),
      '1~CD' => 
      array (
        'desc' => 'clear direct input (active low)',
      ),
      '1B' => 
      array (
        'desc' => 'input (low-to-high triggered)',
      ),
      '1~A' => 
      array (
        'desc' => 'input (high-to-low triggered)',
      ),
      '1Q' => 
      array (
        'desc' => 'output',
      ),
      '1~Q' => 
      array (
        'desc' => 'complementary output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~Q' => 
      array (
        'desc' => 'complementary output',
      ),
      '2Q' => 
      array (
        'desc' => 'output',
      ),
      '2~A' => 
      array (
        'desc' => 'input (high-to-low triggered)',
      ),
      '2B' => 
      array (
        'desc' => 'input (low-to-high triggered)',
      ),
      '2~CD' => 
      array (
        'desc' => 'clear direct input (active low)',
      ),
      '2REXT/CEXT' => 
      array (
        'desc' => 'external capacitor/resistor connection',
      ),
      '2CEXT' => 
      array (
        'desc' => 'external capacitor connection (connect to capacitor and ground)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'External timing resistor R__EXT',
        'val' => 
        array (
          0 => '5 (min)',
          1 => '2000 (max)',
        ),
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'Pulse width variation, Vcc = 5V',
        'val' => '±3',
        'unit' => '%',
      ),
    ),
    'notes' => 
    array (
      0 => 'Connect a timing capacitor C__EXT between nCEXT and nREXT/CEXT.',
      1 => 'Connect a resistor R__EXT between nREXT/CEXT and Vcc.',
      2 => 'A high-to-low transition on n~A when nB is low causes a pulse on nQ and n~Q.',
      3 => 'A low-to-high transition on nB when n~A is high causes a pulse on nQ and n~Q.',
      4 => 'Setting n~CD low inhibits pulses.',
      5 => '(CD4528) For C__EXT > 0.01 µF and Vcc = 5V, output pulse width = 0.2 × R__EXT × C__EXT.',
      6 => '(HEF4528) For C__EXT > 0.01 µF and Vcc = 5V, output pulse width = 0.42 × R__EXT × C__EXT.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1CEXT',
        2 => '1REXT/CEXT',
        3 => '1~CD',
        4 => '1B',
        5 => '1~A',
        6 => '1Q',
        7 => '1~Q',
        8 => 'GND',
        9 => '2~Q',
        10 => '2Q',
        11 => '2~A',
        12 => '2B',
        13 => '2~CD',
        14 => '2REXT/CEXT',
        15 => '2CEXT',
        16 => 'Vcc',
      ),
    ),
  ),
  4538 => 
  array (
    'description' => 'Dual retriggerable precision monostable multivibrator with reset',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4538b.pdf',
    'pins' => 
    array (
      '1CEXT' => 
      array (
        'desc' => 'external capacitor connection (connect to capacitor and ground)',
      ),
      '1REXT/CEXT' => 
      array (
        'desc' => 'external capacitor/resistor connection',
      ),
      '1~CD' => 
      array (
        'desc' => 'clear direct input (active low)',
      ),
      '1B' => 
      array (
        'desc' => 'input (low-to-high triggered)',
      ),
      '1~A' => 
      array (
        'desc' => 'input (high-to-low triggered)',
      ),
      '1Q' => 
      array (
        'desc' => 'output',
      ),
      '1~Q' => 
      array (
        'desc' => 'complementary output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~Q' => 
      array (
        'desc' => 'complementary output',
      ),
      '2Q' => 
      array (
        'desc' => 'output',
      ),
      '2~A' => 
      array (
        'desc' => 'input (high-to-low triggered)',
      ),
      '2B' => 
      array (
        'desc' => 'input (low-to-high triggered)',
      ),
      '2~CD' => 
      array (
        'desc' => 'clear direct input (active low)',
      ),
      '2REXT/CEXT' => 
      array (
        'desc' => 'external capacitor/resistor connection',
      ),
      '2CEXT' => 
      array (
        'desc' => 'external capacitor connection (connect to capacitor and ground)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'External timing resistor R__EXT',
        'val' => '5 (min)',
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'External timing capacitor C__EXT',
        'val' => '2000 (min)',
        'unit' => 'pF',
      ),
      2 => 
      array (
        'param' => 'Pulse width variation, Vcc = 5V',
        'val' => '±0.2',
        'unit' => '%',
      ),
    ),
    'notes' => 
    array (
      0 => 'Connect a timing capacitor C__EXT between nCEXT and nREXT/CEXT.',
      1 => 'Connect a resistor R__EXT between nREXT/CEXT and Vcc.',
      2 => 'A high-to-low transition on n~A when nB is low causes a pulse on nQ and n~Q.',
      3 => 'A low-to-high transition on nB when n~A is high causes a pulse on nQ and n~Q.',
      4 => 'Setting n~CD low inhibits pulses.',
      5 => 'Output pulse width = R__EXT × C__EXT.',
      6 => '(74HC4538) Output pulse width = 0.7 × R__EXT × C__EXT.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1CEXT',
        2 => '1REXT/CEXT',
        3 => '1~CD',
        4 => '1B',
        5 => '1~A',
        6 => '1Q',
        7 => '1~Q',
        8 => 'GND',
        9 => '2~Q',
        10 => '2Q',
        11 => '2~A',
        12 => '2B',
        13 => '2~CD',
        14 => '2REXT/CEXT',
        15 => '2CEXT',
        16 => 'Vcc',
      ),
    ),
  ),
  4541 => 
  array (
    'description' => 'Programmable timer',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4541b.pdf',
    'pins' => 
    array (
      'R__TC' => 
      array (
        'desc' => 'external resistor connection (R__t)',
      ),
      'C__TC' => 
      array (
        'desc' => 'external capacitor connection (C__t)',
      ),
      'RS' => 
      array (
        'desc' => 'external resistor connection (R__S) or external clock input',
      ),
      '~AR' => 
      array (
        'desc' => 'auto reset input (active low)',
      ),
      'MR' => 
      array (
        'desc' => 'master reset input (active high)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'O' => 
      array (
        'desc' => 'output',
      ),
      'PH' => 
      array (
        'desc' => 'phase input',
      ),
      'MODE' => 
      array (
        'desc' => 'mode select (single cycle or continuous)',
      ),
      'A0' => 
      array (
        'desc' => 'divider input',
      ),
      'A1' => 
      array (
        'desc' => 'divider input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Frequency range',
        'val' => 
        array (
          0 => '1 (min)',
          1 => '100k (max)',
        ),
        'unit' => 'Hz',
      ),
      1 => 
      array (
        'param' => 'External capacitor C__t',
        'val' => '100 (min)',
        'unit' => 'pF',
      ),
      2 => 
      array (
        'param' => 'External resistor R__t',
        'val' => 
        array (
          0 => '10k (min)',
          1 => '1M (max)',
        ),
        'unit' => 'Ω',
      ),
    ),
    'notes' => 
    array (
      0 => 'The RC oscillator frequency is 1/(2.3 × R__t &times C__t). R__S = 2R__t.',
      1 => 'An external clock signal, connected to RS, may be used instead. The timer advances on the low-to-high transition of RS.',
      2 => 'The input frequency is divided by a value determined by A1A0: 2<sup>13</sup> (LL), 2<sup>10</sup> (LH), 2<sup>8</sup> (HL), or 2<sup>16</sup> (HH).',
      3 => 'Power-on reset is enabled when ~AR and MR are low. For HEF4541, Vcc should be above 8.5V for correct power-on reset.',
      4 => 'PH specifies the state of the output after reset (high or low).',
      5 => 'When MODE is high, the output oscillates continuously.',
      6 => 'When MODE is low, the output changes only once, after a single cycle.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'R__TC',
        2 => 'C__TC',
        3 => 'RS',
        4 => 'NC',
        5 => '~AR',
        6 => 'MR',
        7 => 'GND',
        8 => 'O',
        9 => 'PH',
        10 => 'MODE',
        11 => 'NC',
        12 => 'A0',
        13 => 'A1',
        14 => 'Vcc',
      ),
    ),
  ),
  4555 => 
  array (
    'description' => 'Dual 1-of-4 decoder/demultiplexer',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4555b.pdf',
    'pins' => 
    array (
      '1~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      '1A__0' => 
      array (
        'desc' => 'address input',
      ),
      '1A__1' => 
      array (
        'desc' => 'address input',
      ),
      '1Y__0' => 
      array (
        'desc' => 'output',
      ),
      '1Y__1' => 
      array (
        'desc' => 'output',
      ),
      '1Y__2' => 
      array (
        'desc' => 'output',
      ),
      '1Y__3' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2Y__3' => 
      array (
        'desc' => 'output',
      ),
      '2Y__2' => 
      array (
        'desc' => 'output',
      ),
      '2Y__1' => 
      array (
        'desc' => 'output',
      ),
      '2Y__0' => 
      array (
        'desc' => 'output',
      ),
      '2A__1' => 
      array (
        'desc' => 'address input',
      ),
      '2A__0' => 
      array (
        'desc' => 'address input',
      ),
      '2~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are mutually exclusive, active high.',
      1 => 'When n~E is high, all outputs nY are low.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~E',
        2 => '1A__0',
        3 => '1A__1',
        4 => '1Y__0',
        5 => '1Y__1',
        6 => '1Y__2',
        7 => '1Y__3',
        8 => 'GND',
        9 => '2Y__3',
        10 => '2Y__2',
        11 => '2Y__1',
        12 => '2Y__0',
        13 => '2A__1',
        14 => '2A__0',
        15 => '2~E',
        16 => 'Vcc',
      ),
    ),
  ),
  4556 => 
  array (
    'description' => 'Dual 1-of-4 decoder/demultiplexer; inverting',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4556b.pdf',
    'pins' => 
    array (
      '1~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      '1A__0' => 
      array (
        'desc' => 'address input',
      ),
      '1A__1' => 
      array (
        'desc' => 'address input',
      ),
      '1~Y~__0' => 
      array (
        'desc' => 'output',
      ),
      '1~Y~__1' => 
      array (
        'desc' => 'output',
      ),
      '1~Y~__2' => 
      array (
        'desc' => 'output',
      ),
      '1~Y~__3' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~Y~__3' => 
      array (
        'desc' => 'output',
      ),
      '2~Y~__2' => 
      array (
        'desc' => 'output',
      ),
      '2~Y~__1' => 
      array (
        'desc' => 'output',
      ),
      '2~Y~__0' => 
      array (
        'desc' => 'output',
      ),
      '2A__1' => 
      array (
        'desc' => 'address input',
      ),
      '2A__0' => 
      array (
        'desc' => 'address input',
      ),
      '2~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are mutually exclusive, active low.',
      1 => 'When n~E is high, all outputs n~Y~ are high.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~E',
        2 => '1A__0',
        3 => '1A__1',
        4 => '1~Y~__0',
        5 => '1~Y~__1',
        6 => '1~Y~__2',
        7 => '1~Y~__3',
        8 => 'GND',
        9 => '2~Y~__3',
        10 => '2~Y~__2',
        11 => '2~Y~__1',
        12 => '2~Y~__0',
        13 => '2A__1',
        14 => '2A__0',
        15 => '2~E',
        16 => 'Vcc',
      ),
    ),
  ),
  4557 => 
  array (
    'description' => '1-to-64 bit variable length shift register',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4557b.pdf',
    'pins' => 
    array (
      'L__2' => 
      array (
        'desc' => 'length control input',
      ),
      'L__1' => 
      array (
        'desc' => 'length control input',
      ),
      'MR' => 
      array (
        'desc' => 'asynchronous master reset',
      ),
      'CP__0' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '~CP~__1' => 
      array (
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      'D__B' => 
      array (
        'desc' => 'data input',
      ),
      'D__A' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'A/~B' => 
      array (
        'desc' => 'select data input',
      ),
      'Q' => 
      array (
        'desc' => 'output',
      ),
      '~Q' => 
      array (
        'desc' => 'complementary output',
      ),
      'L__32' => 
      array (
        'desc' => 'length input',
      ),
      'L__16' => 
      array (
        'desc' => 'length input',
      ),
      'L__8' => 
      array (
        'desc' => 'length input',
      ),
      'L__4' => 
      array (
        'desc' => 'length input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The length of the shift register is determined by the sum of the length inputs (L__1, L__2, L__4, L__8, L__16, L__32) plus one.',
      1 => 'Data is shifted in on the low-to-high transition of CP__0 when ~CP~__1 is low, or the high-to-low transition of ~CP~__1 when CP__0 is high.',
      2 => 'When A/~B is high, a clock pulse shifts in data from D__A. When low, a clock pulse shifts in data from D__B.',
      3 => 'When MR is high, the register is reset, Q is forced low, and ~Q is forced high.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'L__2',
        2 => 'L__1',
        3 => 'MR',
        4 => 'CP__0',
        5 => '~CP~__1',
        6 => 'D__B',
        7 => 'D__A',
        8 => 'GND',
        9 => 'A/~B',
        10 => 'Q',
        11 => '~Q',
        12 => 'L__32',
        13 => 'L__16',
        14 => 'L__8',
        15 => 'L__4',
        16 => 'Vcc',
      ),
    ),
  ),
  4572 => 
  array (
    'description' => 'Hex gate (four inverters, one 2-input NOR gate, one 2-input NAND gate)',
    'family' => '4000',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/cd4572ub.pdf',
    'pins' => 
    array (
      '~A' => 
      array (
        'desc' => 'inverter 1 output',
      ),
      'A' => 
      array (
        'desc' => 'inverter 1 input',
      ),
      '~B' => 
      array (
        'desc' => 'inverter 2 output',
      ),
      'B' => 
      array (
        'desc' => 'inverter 2 input',
      ),
      'C NOR D' => 
      array (
        'desc' => 'NOR gate output',
      ),
      'C' => 
      array (
        'desc' => 'NOR gate input',
      ),
      'D' => 
      array (
        'desc' => 'NOR gate input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~E' => 
      array (
        'desc' => 'inverter 3 output',
      ),
      'E' => 
      array (
        'desc' => 'inverter 3 input',
      ),
      '~F' => 
      array (
        'desc' => 'inverter 4 output',
      ),
      'F' => 
      array (
        'desc' => 'inverter 4 input',
      ),
      'G NAND H' => 
      array (
        'desc' => 'NAND gate output',
      ),
      'G' => 
      array (
        'desc' => 'NAND gate input',
      ),
      'H' => 
      array (
        'desc' => 'NAND gate input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~A',
        2 => 'A',
        3 => '~B',
        4 => 'B',
        5 => 'C NOR D',
        6 => 'C',
        7 => 'D',
        8 => 'GND',
        9 => '~E',
        10 => 'E',
        11 => '~F',
        12 => 'F',
        13 => 'G NAND H',
        14 => 'G',
        15 => 'H',
        16 => 'Vcc',
      ),
    ),
  ),
  4585 => 
  array (
    'description' => '4-bit magnitude comparator',
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4585b.pdf',
    'pins' => 
    array (
      'B__2' => 
      array (
        'desc' => 'word B input',
      ),
      'A__2' => 
      array (
        'desc' => 'word A input',
      ),
      'Q__A=B' => 
      array (
        'desc' => 'A = B output',
      ),
      'I__A>B' => 
      array (
        'desc' => 'A > B expansion input',
      ),
      'I__A<B' => 
      array (
        'desc' => 'A < B expansion input',
      ),
      'I__A=B' => 
      array (
        'desc' => 'A = B expansion input',
      ),
      'A__1' => 
      array (
        'desc' => 'word A input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'B__1' => 
      array (
        'desc' => 'word B input',
      ),
      'A__0' => 
      array (
        'desc' => 'word A input',
      ),
      'B__0' => 
      array (
        'desc' => 'word B input',
      ),
      'Q__A<B' => 
      array (
        'desc' => 'A < B output',
      ),
      'Q__A>B' => 
      array (
        'desc' => 'A > B output',
      ),
      'B__3' => 
      array (
        'desc' => 'word B input',
      ),
      'A__3' => 
      array (
        'desc' => 'word A input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The least significant (or only) comparator in a chain should have I__A=B and I__A>B tied high and I__A<B tied low.',
      1 => 'To compare more than 4 bits, connect Q__A<B and Q__A=B to the inputs of the next significant comparator. I__A>B of the next significant comparator should be tied high.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'B__2',
        2 => 'A__2',
        3 => 'Q__A=B',
        4 => 'I__A>B',
        5 => 'I__A<B',
        6 => 'I__A=B',
        7 => 'A__1',
        8 => 'GND',
        9 => 'B__1',
        10 => 'A__0',
        11 => 'B__0',
        12 => 'Q__A<B',
        13 => 'Q__A>B',
        14 => 'B__3',
        15 => 'A__3',
        16 => 'Vcc',
      ),
    ),
  ),
  '4N35M' => 
  array (
    'description' => 'Phototransistor output optocoupler',
    'aliases' => 
    array (
      0 => '4N25M',
      1 => '4N26M',
      2 => '4N27M',
      3 => '4N35',
      4 => '4N36M',
      5 => '4N37M',
      6 => 'H11A1M',
      7 => 'H11A2M',
      8 => 'H11A3M',
      9 => 'H11A4M',
      10 => 'H11A5M',
    ),
    'family' => 'Fairchild',
    'datasheet' => 'http://www.fairchildsemi.com/ds/4N/4N35-M.pdf',
    'pins' => 
    array (
      'A' => 
      array (
        'desc' => 'anode',
      ),
      'K' => 
      array (
        'desc' => 'cathode',
      ),
      'E' => 
      array (
        'desc' => 'emitter',
      ),
      'C' => 
      array (
        'desc' => 'collector',
      ),
      'B' => 
      array (
        'desc' => 'base',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Input forward voltage, typical',
        'val' => '1.18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Input forward voltage, maximum',
        'val' => '1.5',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input current, maximum',
        'val' => '60',
        'unit' => 'ma',
      ),
      3 => 
      array (
        'param' => 'Current transfer ratio, collector to emitter',
        'val' => 
        array (
          0 => '100 (4N35M',
          1 => '4N36M',
          2 => '4N37M)',
          3 => '50 (H11A1M)',
          4 => '30 (H11A5M)',
          5 => '20 (4N25M',
          6 => '4N26M',
          7 => 'H11A2M',
          8 => 'H11A3M)',
          9 => '10 (4N27M',
          10 => '4N28M',
          11 => 'H11A4M)',
        ),
        'unit' => '',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A',
        2 => 'K',
        3 => 'NC',
        4 => 'E',
        5 => 'C',
        6 => 'B',
      ),
    ),
  ),
  54374 => 
  array (
    'description' => 'Octal D-type edge-triggered flip-flops with 3-state outputs',
    'family' => '5400',
    'datasheet' => 'http://www.alldatasheet.com/datasheet-pdf/pdf/27731/TI/SN54ALS374A.html',
    'pins' => 
    array (
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1Q' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      '2Q' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '3Q' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '3D' => 
      array (
        'desc' => 'data input',
      ),
      '4D' => 
      array (
        'desc' => 'data input',
      ),
      '4Q' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CLK' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      '5Q' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '5D' => 
      array (
        'desc' => 'data input',
      ),
      '6D' => 
      array (
        'desc' => 'data input',
      ),
      '6Q' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '7Q' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '7D' => 
      array (
        'desc' => 'data input',
      ),
      'D8D7' => 
      array (
        'desc' => 'data input',
      ),
      '8Q' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply Voltage range',
        'val' => 
        array (
          0 => '-0.5 to 7',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Input Voltage range',
        'val' => 
        array (
          0 => '-0.5 to 7',
        ),
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Recommended Voltage range',
        'val' => 
        array (
          0 => '4.5 to 5.5',
        ),
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'High level input voltage',
        'val' => 
        array (
          0 => '2',
        ),
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Low-level input voltage',
        'val' => 
        array (
          0 => '0.7 (54AL)',
          1 => '0.8 (74AL)',
        ),
        'unit' => 'V',
      ),
      5 => 
      array (
        'param' => 'High-level output current',
        'val' => 
        array (
          0 => '-1 (54AL)',
          1 => '-2.6 (74AL)',
        ),
        'unit' => 'mA',
      ),
      6 => 
      array (
        'param' => 'Low-level output current',
        'val' => 
        array (
          0 => '12 (54AL)',
          1 => '24 (74AL)',
        ),
        'unit' => 'mA',
      ),
      7 => 
      array (
        'param' => 'Operating Temp',
        'val' => 
        array (
          0 => '-55 to +125 (54AL)',
          1 => '0 to +70 (74AL)',
        ),
        'unit' => 'degC',
      ),
    ),
    'notes' => 
    array (
      0 => '~OE does not affect internal operations of the flip-flops. Old data can be retained or new data can be entered while the outputs are in the high-impedance state',
      1 => 'released april 1982, revised november 1999',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE',
        2 => '1Q',
        3 => '1D',
        4 => '2D',
        5 => '2Q',
        6 => '3Q',
        7 => '3D',
        8 => '4D',
        9 => '4Q',
        10 => 'GND',
        11 => 'CLK',
        12 => '5Q',
        13 => '5D',
        14 => '6D',
        15 => '6Q',
        16 => '7Q',
        17 => '7D',
        18 => 'D8D7',
        19 => '8Q',
        20 => 'Vcc',
      ),
    ),
  ),
  555 => 
  array (
    'description' => 'Timer',
    'datasheet' => 'http://www.datasheetcatalog.org/datasheet/philips/NE_SA_SE555_C_2.pdf',
    'pins' => 
    array (
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'TRIG' => 
      array (
        'desc' => 'trigger',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      '~RESET' => 
      array (
        'desc' => 'reset (active low)',
      ),
      'CV' => 
      array (
        'desc' => 'control voltage',
      ),
      'THR' => 
      array (
        'desc' => 'threshold',
      ),
      'DIS' => 
      array (
        'desc' => 'discharge',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum output current (NE555)',
        'val' => '200',
        'unit' => 'mA',
      ),
      2 => 
      array (
        'param' => 'Power dissipation',
        'val' => '600',
        'unit' => 'mW',
      ),
    ),
    'notes' => 
    array (
      0 => 'In monostable mode, pulse width ≈ 1.1RC',
      1 => 'In astable mode, frequency = 1/(0.693*C*(R1+2*R2))',
      2 => 'In astable mode, pulse high time = 0.693*(R1+R2)*C',
      3 => 'In astable mode, pulse low time = 0.693*R2*C',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GND',
        2 => 'TRIG',
        3 => 'OUT',
        4 => '~RESET',
        5 => 'CV',
        6 => 'THR',
        7 => 'DIS',
        8 => 'Vcc',
      ),
    ),
  ),
  556 => 
  array (
    'description' => 'Dual timer',
    'datasheet' => 'http://www.national.com/ds/LM/LM556.pdf',
    'pins' => 
    array (
      'DIS 1' => 
      array (
        'desc' => 'discharge (timer 1)',
      ),
      'THR 1' => 
      array (
        'desc' => 'threshold (timer 1)',
      ),
      'CV 1' => 
      array (
        'desc' => 'control voltage (timer 1)',
      ),
      '~RESET~ 1' => 
      array (
        'desc' => 'reset (active low, timer 1)',
      ),
      'OUT 1' => 
      array (
        'desc' => 'output (timer 1)',
      ),
      'TRIG 1' => 
      array (
        'desc' => 'trigger (timer 1)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'TRIG 2' => 
      array (
        'desc' => 'trigger (timer 2)',
      ),
      'OUT 2' => 
      array (
        'desc' => 'output (timer 2)',
      ),
      '~RESET~ 2' => 
      array (
        'desc' => 'reset (active low, timer 2)',
      ),
      'CV 2' => 
      array (
        'desc' => 'control voltage (timer 2)',
      ),
      'THR 2' => 
      array (
        'desc' => 'threshold (timer 2)',
      ),
      'DIS 2' => 
      array (
        'desc' => 'discharge (timer 2)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The 556 contains two 555 timers.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'DIS 1',
        2 => 'THR 1',
        3 => 'CV 1',
        4 => '~RESET~ 1',
        5 => 'OUT 1',
        6 => 'TRIG 1',
        7 => 'GND',
        8 => 'TRIG 2',
        9 => 'OUT 2',
        10 => '~RESET~ 2',
        11 => 'CV 2',
        12 => 'THR 2',
        13 => 'DIS 2',
        14 => 'Vcc',
      ),
    ),
  ),
  62256 => 
  array (
    'description' => '32K x 8 static RAM',
    'aliases' => 
    array (
    ),
    'family' => 'memory',
    'datasheet' => 'http://web.mit.edu/6.115/www/datasheets/62256.pdf',
    'pins' => 
    array (
      'A__14' => 
      array (
        'desc' => 'address input',
      ),
      'A__12' => 
      array (
        'desc' => 'address input',
      ),
      'A__7' => 
      array (
        'desc' => 'address input',
      ),
      'A__6' => 
      array (
        'desc' => 'address input',
      ),
      'A__5' => 
      array (
        'desc' => 'address input',
      ),
      'A__4' => 
      array (
        'desc' => 'address input',
      ),
      'A__3' => 
      array (
        'desc' => 'address input',
      ),
      'A__2' => 
      array (
        'desc' => 'address input',
      ),
      'A__1' => 
      array (
        'desc' => 'address input',
      ),
      'A__0' => 
      array (
        'desc' => 'address input',
      ),
      'I/O__0' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__1' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__2' => 
      array (
        'desc' => 'data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'I/O__3' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__4' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__5' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__6' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__7' => 
      array (
        'desc' => 'data input/output',
      ),
      '~CE' => 
      array (
        'desc' => 'chip enable (active low)',
      ),
      'A__10' => 
      array (
        'desc' => 'address input',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'A__11' => 
      array (
        'desc' => 'address input',
      ),
      'A__9' => 
      array (
        'desc' => 'address input',
      ),
      'A__8' => 
      array (
        'desc' => 'address input',
      ),
      'A__13' => 
      array (
        'desc' => 'address input',
      ),
      '~WE' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Data is written when ~CE is low and ~WE is low.',
      1 => 'Data is read when ~CE is low, ~OE is low, and ~WE is high.',
      2 => 'The input/output pins assume a high-impedance state if ~CE is high.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A__14',
        2 => 'A__12',
        3 => 'A__7',
        4 => 'A__6',
        5 => 'A__5',
        6 => 'A__4',
        7 => 'A__3',
        8 => 'A__2',
        9 => 'A__1',
        10 => 'A__0',
        11 => 'I/O__0',
        12 => 'I/O__1',
        13 => 'I/O__2',
        14 => 'GND',
        15 => 'I/O__3',
        16 => 'I/O__4',
        17 => 'I/O__5',
        18 => 'I/O__6',
        19 => 'I/O__7',
        20 => '~CE',
        21 => 'A__10',
        22 => '~OE',
        23 => 'A__11',
        24 => 'A__9',
        25 => 'A__8',
        26 => 'A__13',
        27 => '~WE',
        28 => 'Vcc',
      ),
    ),
  ),
  6264 => 
  array (
    'description' => '8K x 8 static RAM',
    'aliases' => 
    array (
    ),
    'family' => 'memory',
    'datasheet' => 'http://web.mit.edu/6.115/www/datasheets/6264.pdf',
    'pins' => 
    array (
      'A__4' => 
      array (
        'desc' => 'address input',
      ),
      'A__5' => 
      array (
        'desc' => 'address input',
      ),
      'A__6' => 
      array (
        'desc' => 'address input',
      ),
      'A__7' => 
      array (
        'desc' => 'address input',
      ),
      'A__8' => 
      array (
        'desc' => 'address input',
      ),
      'A__9' => 
      array (
        'desc' => 'address input',
      ),
      'A__10' => 
      array (
        'desc' => 'address input',
      ),
      'A__11' => 
      array (
        'desc' => 'address input',
      ),
      'A__12' => 
      array (
        'desc' => 'address input',
      ),
      'I/O__0' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__1' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__2' => 
      array (
        'desc' => 'data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'I/O__3' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__4' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__5' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__6' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__7' => 
      array (
        'desc' => 'data input/output',
      ),
      '~CE~__1' => 
      array (
        'desc' => 'chip enable (active low)',
      ),
      'A__0' => 
      array (
        'desc' => 'address input',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'A__1' => 
      array (
        'desc' => 'address input',
      ),
      'A__2' => 
      array (
        'desc' => 'address input',
      ),
      'A__3' => 
      array (
        'desc' => 'address input',
      ),
      'CE__2' => 
      array (
        'desc' => 'chip enable (active high)',
      ),
      '~WE' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Data is written when ~CE~__1 is low, ~WE is low, and CE__2 is high.',
      1 => 'Data is read whem ~CE~__1 is low, ~OE is low, and CE__2 is high.',
      2 => 'The input/output pins assume a high-impedance state if the chip is not selected and/or ~OE is low.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'NC',
        2 => 'A__4',
        3 => 'A__5',
        4 => 'A__6',
        5 => 'A__7',
        6 => 'A__8',
        7 => 'A__9',
        8 => 'A__10',
        9 => 'A__11',
        10 => 'A__12',
        11 => 'I/O__0',
        12 => 'I/O__1',
        13 => 'I/O__2',
        14 => 'GND',
        15 => 'I/O__3',
        16 => 'I/O__4',
        17 => 'I/O__5',
        18 => 'I/O__6',
        19 => 'I/O__7',
        20 => '~CE~__1',
        21 => 'A__0',
        22 => '~OE',
        23 => 'A__1',
        24 => 'A__2',
        25 => 'A__3',
        26 => 'CE__2',
        27 => '~WE',
        28 => 'Vcc',
      ),
    ),
  ),
  628128 => 
  array (
    'description' => '128K x 8 static RAM',
    'aliases' => 
    array (
    ),
    'family' => 'memory',
    'datasheet' => 'http://www.futurlec.com/Datasheet/Memory/628128.pdf',
    'pins' => 
    array (
      'A__16' => 
      array (
        'desc' => 'address input',
      ),
      'A__14' => 
      array (
        'desc' => 'address input',
      ),
      'A__12' => 
      array (
        'desc' => 'address input',
      ),
      'A__7' => 
      array (
        'desc' => 'address input',
      ),
      'A__6' => 
      array (
        'desc' => 'address input',
      ),
      'A__5' => 
      array (
        'desc' => 'address input',
      ),
      'A__4' => 
      array (
        'desc' => 'address input',
      ),
      'A__3' => 
      array (
        'desc' => 'address input',
      ),
      'A__2' => 
      array (
        'desc' => 'address input',
      ),
      'A__1' => 
      array (
        'desc' => 'address input',
      ),
      'A__0' => 
      array (
        'desc' => 'address input',
      ),
      'I/O__0' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__1' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__2' => 
      array (
        'desc' => 'data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'I/O__3' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__4' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__5' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__6' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__7' => 
      array (
        'desc' => 'data input/output',
      ),
      '~CS1' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      'A__10' => 
      array (
        'desc' => 'address input',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'A__11' => 
      array (
        'desc' => 'address input',
      ),
      'A__9' => 
      array (
        'desc' => 'address input',
      ),
      'A__8' => 
      array (
        'desc' => 'address input',
      ),
      'A__13' => 
      array (
        'desc' => 'address input',
      ),
      '~WE' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'CS2' => 
      array (
        'desc' => 'chip select (active high)',
      ),
      'A__15' => 
      array (
        'desc' => 'address input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Data is written when ~CS1 is low, CS2 is high, and ~WE is low.',
      1 => 'Data is read when ~CS1 is low, CS2 is high, ~OE is low, and ~WE is high.',
      2 => 'The input/output pins assume a high-impedance state if ~CS1 is high or CS2 is low.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'NC',
        2 => 'A__16',
        3 => 'A__14',
        4 => 'A__12',
        5 => 'A__7',
        6 => 'A__6',
        7 => 'A__5',
        8 => 'A__4',
        9 => 'A__3',
        10 => 'A__2',
        11 => 'A__1',
        12 => 'A__0',
        13 => 'I/O__0',
        14 => 'I/O__1',
        15 => 'I/O__2',
        16 => 'GND',
        17 => 'I/O__3',
        18 => 'I/O__4',
        19 => 'I/O__5',
        20 => 'I/O__6',
        21 => 'I/O__7',
        22 => '~CS1',
        23 => 'A__10',
        24 => '~OE',
        25 => 'A__11',
        26 => 'A__9',
        27 => 'A__8',
        28 => 'A__13',
        29 => '~WE',
        30 => 'CS2',
        31 => 'A__15',
        32 => 'Vcc',
      ),
    ),
  ),
  628512 => 
  array (
    'description' => '512K x 8 static RAM',
    'aliases' => 
    array (
      0 => 'AS6C4008',
    ),
    'family' => 'memory',
    'datasheet' => 'http://www.futurlec.com/Datasheet/Memory/628512.pdf',
    'pins' => 
    array (
      'A__18' => 
      array (
        'desc' => 'address input',
      ),
      'A__16' => 
      array (
        'desc' => 'address input',
      ),
      'A__14' => 
      array (
        'desc' => 'address input',
      ),
      'A__12' => 
      array (
        'desc' => 'address input',
      ),
      'A__7' => 
      array (
        'desc' => 'address input',
      ),
      'A__6' => 
      array (
        'desc' => 'address input',
      ),
      'A__5' => 
      array (
        'desc' => 'address input',
      ),
      'A__4' => 
      array (
        'desc' => 'address input',
      ),
      'A__3' => 
      array (
        'desc' => 'address input',
      ),
      'A__2' => 
      array (
        'desc' => 'address input',
      ),
      'A__1' => 
      array (
        'desc' => 'address input',
      ),
      'A__0' => 
      array (
        'desc' => 'address input',
      ),
      'I/O__0' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__1' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__2' => 
      array (
        'desc' => 'data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'I/O__3' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__4' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__5' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__6' => 
      array (
        'desc' => 'data input/output',
      ),
      'I/O__7' => 
      array (
        'desc' => 'data input/output',
      ),
      '~CS' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      'A__10' => 
      array (
        'desc' => 'address input',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'A__11' => 
      array (
        'desc' => 'address input',
      ),
      'A__9' => 
      array (
        'desc' => 'address input',
      ),
      'A__8' => 
      array (
        'desc' => 'address input',
      ),
      'A__13' => 
      array (
        'desc' => 'address input',
      ),
      '~WE' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'A__17' => 
      array (
        'desc' => 'address input',
      ),
      'A__15' => 
      array (
        'desc' => 'address input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Data is written when ~CS is low and ~WE is low.',
      1 => 'Data is read when ~CS is low, ~OE is low, and ~WE is high.',
      2 => 'The input/output pins assume a high-impedance state if ~CS is high.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A__18',
        2 => 'A__16',
        3 => 'A__14',
        4 => 'A__12',
        5 => 'A__7',
        6 => 'A__6',
        7 => 'A__5',
        8 => 'A__4',
        9 => 'A__3',
        10 => 'A__2',
        11 => 'A__1',
        12 => 'A__0',
        13 => 'I/O__0',
        14 => 'I/O__1',
        15 => 'I/O__2',
        16 => 'GND',
        17 => 'I/O__3',
        18 => 'I/O__4',
        19 => 'I/O__5',
        20 => 'I/O__6',
        21 => 'I/O__7',
        22 => '~CS',
        23 => 'A__10',
        24 => '~OE',
        25 => 'A__11',
        26 => 'A__9',
        27 => 'A__8',
        28 => 'A__13',
        29 => '~WE',
        30 => 'A__17',
        31 => 'A__15',
        32 => 'Vcc',
      ),
    ),
  ),
  6522 => 
  array (
    'description' => 'Versatile Interface Adapter',
    'aliases' => 
    array (
      0 => 'W65C22',
    ),
    'family' => 'MOS Technology',
    'datasheet' => 'http://www.westerndesigncenter.com/wdc/documentation/w65c22.pdf',
    'pins' => 
    array (
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'PA0' => 
      array (
        'desc' => 'port A',
      ),
      'PA1' => 
      array (
        'desc' => 'port A',
      ),
      'PA2' => 
      array (
        'desc' => 'port A',
      ),
      'PA3' => 
      array (
        'desc' => 'port A',
      ),
      'PA4' => 
      array (
        'desc' => 'port A',
      ),
      'PA5' => 
      array (
        'desc' => 'port A',
      ),
      'PA6' => 
      array (
        'desc' => 'port A',
      ),
      'PA7' => 
      array (
        'desc' => 'port A',
      ),
      'PB0' => 
      array (
        'desc' => 'port B',
      ),
      'PB1' => 
      array (
        'desc' => 'port B',
      ),
      'PB2' => 
      array (
        'desc' => 'port B',
      ),
      'PB3' => 
      array (
        'desc' => 'port B',
      ),
      'PB4' => 
      array (
        'desc' => 'port B',
      ),
      'PB5' => 
      array (
        'desc' => 'port B',
      ),
      'PB6' => 
      array (
        'desc' => 'port B (pulse counting input for timer 2)',
      ),
      'PB7' => 
      array (
        'desc' => 'port B (controllable by timer 1)',
      ),
      'CB1' => 
      array (
        'desc' => 'port B control (shift register clock)',
      ),
      'CB2' => 
      array (
        'desc' => 'port B control (shift register data)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      '~IRQ' => 
      array (
        'desc' => 'interrupt request output*',
      ),
      'R/~W' => 
      array (
        'desc' => 'read/write select',
      ),
      '~CS2' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      'CS1' => 
      array (
        'desc' => 'chip select (active high)',
      ),
      '∅2' => 
      array (
        'desc' => 'phase-2 clock input',
      ),
      'D7' => 
      array (
        'desc' => 'data bus',
      ),
      'D6' => 
      array (
        'desc' => 'data bus',
      ),
      'D5' => 
      array (
        'desc' => 'data bus',
      ),
      'D4' => 
      array (
        'desc' => 'data bus',
      ),
      'D3' => 
      array (
        'desc' => 'data bus',
      ),
      'D2' => 
      array (
        'desc' => 'data bus',
      ),
      'D1' => 
      array (
        'desc' => 'data bus',
      ),
      'D0' => 
      array (
        'desc' => 'data bus',
      ),
      '~RES' => 
      array (
        'desc' => 'reset (active low)',
      ),
      'RS3' => 
      array (
        'desc' => 'register select (address bus)',
      ),
      'RS2' => 
      array (
        'desc' => 'register select (address bus)',
      ),
      'RS1' => 
      array (
        'desc' => 'register select (address bus)',
      ),
      'RS0' => 
      array (
        'desc' => 'register select (address bus)',
      ),
      'CA2' => 
      array (
        'desc' => 'port A control',
      ),
      'CA1' => 
      array (
        'desc' => 'port A control',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '1 (NMOS)',
          1 => '14 (W65C22)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'In older chips, ~IRQ was an open drain output. In the W65C22S, it is fully driven.',
      1 => 'Registers:
<table>
<tr><td>$00</td><td>Output register B (write), input register B (read)</td></tr>
<tr><td>$01</td><td>Output register A (write), input register A (read)</td></tr>
<tr><td>$02</td><td>Data direction register B</td></tr>
<tr><td>$03</td><td>Data direction register A</td></tr>
<tr><td>$04</td><td>Timer 1 latch LSB (write), timer 1 counter LSB (read)</td></tr>
<tr><td>$05</td><td>Timer 1 counter MSB</td></tr>
<tr><td>$06</td><td>Timer 1 latch LSB</td></tr>
<tr><td>$07</td><td>Timer 1 latch MSB</td></tr>
<tr><td>$08</td><td>Timer 2 latch LSB (write), timer 2 counter LSB (read)</td></tr>
<tr><td>$09</td><td>Timer 2 counter MSB</td></tr>
<tr><td>$0A</td><td>Shift register</td></tr>
<tr><td>$0B</td><td>Auxiliary control register</td></tr>
<tr><td>$0C</td><td>Peripheral control register</td></tr>
<tr><td>$0D</td><td>Interrupt flag register</td></tr>
<tr><td>$0E</td><td>Interrupt enable register</td></tr>
<tr><td>$0F</td><td>Same as register $01, but with no effect on handshake</td></tr>
</table>',
      2 => 'Timer 1 can operate in one-shot mode or free-running mode (square wave).',
      3 => 'Timer 2 can operate in one-shot mode or pulse-counting mode (counts negative pulses on PB6).',
      4 => 'Counters for timers in one-shot or free-running mode decrement at the ∅2 clock rate.',
      5 => 'The shift register is 8 bits wide, can shift in or out, and can generate its own clock or shift under the control of an external clock on CB1.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GND',
        2 => 'PA0',
        3 => 'PA1',
        4 => 'PA2',
        5 => 'PA3',
        6 => 'PA4',
        7 => 'PA5',
        8 => 'PA6',
        9 => 'PA7',
        10 => 'PB0',
        11 => 'PB1',
        12 => 'PB2',
        13 => 'PB3',
        14 => 'PB4',
        15 => 'PB5',
        16 => 'PB6',
        17 => 'PB7',
        18 => 'CB1',
        19 => 'CB2',
        20 => 'Vcc',
        21 => '~IRQ',
        22 => 'R/~W',
        23 => '~CS2',
        24 => 'CS1',
        25 => '∅2',
        26 => 'D7',
        27 => 'D6',
        28 => 'D5',
        29 => 'D4',
        30 => 'D3',
        31 => 'D2',
        32 => 'D1',
        33 => 'D0',
        34 => '~RES',
        35 => 'RS3',
        36 => 'RS2',
        37 => 'RS1',
        38 => 'RS0',
        39 => 'CA2',
        40 => 'CA1',
      ),
    ),
  ),
  6581 => 
  array (
    'description' => 'Sound Interface Device (SID)',
    'aliases' => 
    array (
      0 => 'SID',
    ),
    'family' => 'MOS Technology',
    'datasheet' => 'http://www.waitingforfriday.com/index.php/Commodore_SID_6581_Datasheet',
    'pins' => 
    array (
      'CAP1A' => 
      array (
        'desc' => 'capacitor C1 connection',
      ),
      'CAP1B' => 
      array (
        'desc' => 'capacitor C1 connection',
      ),
      'CAP2A' => 
      array (
        'desc' => 'capacitor C2 connection',
      ),
      'CAP2B' => 
      array (
        'desc' => 'capacitor C2 connection',
      ),
      '~RES' => 
      array (
        'desc' => 'master reset',
      ),
      '∅2' => 
      array (
        'desc' => 'master clock',
      ),
      'R/~W' => 
      array (
        'desc' => 'read/write select',
      ),
      '~CS' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      'A0' => 
      array (
        'desc' => 'address bus (register select)',
      ),
      'A1' => 
      array (
        'desc' => 'address bus (register select)',
      ),
      'A2' => 
      array (
        'desc' => 'address bus (register select)',
      ),
      'A3' => 
      array (
        'desc' => 'address bus (register select)',
      ),
      'A4' => 
      array (
        'desc' => 'address bus (register select)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'D0' => 
      array (
        'desc' => 'data bus',
      ),
      'D1' => 
      array (
        'desc' => 'data bus',
      ),
      'D2' => 
      array (
        'desc' => 'data bus',
      ),
      'D3' => 
      array (
        'desc' => 'data bus',
      ),
      'D4' => 
      array (
        'desc' => 'data bus',
      ),
      'D5' => 
      array (
        'desc' => 'data bus',
      ),
      'D6' => 
      array (
        'desc' => 'data bus',
      ),
      'D7' => 
      array (
        'desc' => 'data bus',
      ),
      'POTY' => 
      array (
        'desc' => 'Y-axis potentiometer input',
      ),
      'POTX' => 
      array (
        'desc' => 'X-axis potentiometer input',
      ),
      'Vcc' => 
      array (
        'desc' => '+5VDC supply',
      ),
      'EXT IN' => 
      array (
        'desc' => 'external audio input',
      ),
      'AUDIO OUT' => 
      array (
        'desc' => 'audio output',
      ),
      'Vdd' => 
      array (
        'desc' => '+12VDC supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Minimum clock cycle time',
        'val' => '1',
        'unit' => 'µs',
      ),
    ),
    'notes' => 
    array (
      0 => 'C1 and C2 are integrating capacitors for the filter; polystyrene capacitors are preferred.',
      1 => 'C1 and C2 should have the same value. 2200 pF gives good operation over the audio range (30Hz-12kHz).',
      2 => 'Filter cutoff frequency is approx. 2.6×10<sup>-5</sup>/C (where C is the value of C1 or C2).',
      3 => 'POTX and POTY pins must be connected to RC networks; the time constant RC should be 4.7×10<sup>-4</sup>. Recommended capacitor value is 1000 pF, recommended potentiometer value is 470 kΩ.',
      4 => 'Maximum audio output level is approx. 3V p-p at a 6V DC level. A 1kΩ resistor should be connected from AUDIO OUT to ground, and a 1-10µF electrolytic capacitor should be used for AC coupling.',
      5 => 'Registers:
<table>
<tr><td>$00</td><td>Voice 1 frequency low byte</td></tr>
<tr><td>$01</td><td>Voice 1 frequency high byte</td></tr>
<tr><td>$02</td><td>Voice 1 pulse width low byte</td></tr>
<tr><td>$03</td><td>Voice 1 pulse width high byte (bits 3-0)</td></tr>
<tr><td>$04</td><td>Voice 1 control (gate, sync, ring mod, waveform)</td></tr>
<tr><td>$05</td><td>Voice 1 attack/decay rates</td></tr>
<tr><td>$06</td><td>Voice 1 sustain level/release rate</td></tr>
<tr><td>$07</td><td>Voice 2 frequency low byte</td></tr>
<tr><td>$08</td><td>Voice 2 frequency high byte</td></tr>
<tr><td>$09</td><td>Voice 2 pulse width low byte</td></tr>
<tr><td>$0A</td><td>Voice 2 pulse width high byte (bits 3-0)</td></tr>
<tr><td>$0B</td><td>Voice 2 control (gate, sync, ring mod, waveform)</td></tr>
<tr><td>$0C</td><td>Voice 2 attack/decay rates</td></tr>
<tr><td>$0D</td><td>Voice 2 sustain level/release rate</td></tr>
<tr><td>$0E</td><td>Voice 3 frequency low byte</td></tr>
<tr><td>$0F</td><td>Voice 3 frequency high byte</td></tr>
<tr><td>$10</td><td>Voice 3 pulse width low byte</td></tr>
<tr><td>$11</td><td>Voice 3 pulse width high byte (bits 3-0)</td></tr>
<tr><td>$12</td><td>Voice 3 control (gate, sync, ring mod, waveform)</td></tr>
<tr><td>$13</td><td>Voice 3 attack/decay rates</td></tr>
<tr><td>$14</td><td>Voice 3 sustain level/release rate</td></tr>
<tr><td>$15</td><td>Filter cutoff frequency low byte</td></tr>
<tr><td>$16</td><td>Filter cutoff frequency high byte (bits 2-0)</td></tr>
<tr><td>$17</td><td>Filter resonance/control</td></tr>
<tr><td>$18</td><td>Filter mode/volume control</td></tr>
<tr><td>$19</td><td>POTX value (0-255), updated every 512 clock cycles</td></tr>
<tr><td>$1A</td><td>POTY value (0-255), updated every 512 clock cycles</td></tr>
<tr><td>$1B</td><td>Upper 8 bits of Oscillator 3 value (random number if noise waveform is selected)</td></tr>
<tr><td>$1C</td><td>Upper 8 bits of Voice 3 envelope generator value</td></tr>
</table>',
      6 => 'Oscillator frequency = (Fn × Fclk/16777216) Hz',
      7 => 'Pulse width = (PWn/40.95) %',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'CAP1A',
        2 => 'CAP1B',
        3 => 'CAP2A',
        4 => 'CAP2B',
        5 => '~RES',
        6 => '∅2',
        7 => 'R/~W',
        8 => '~CS',
        9 => 'A0',
        10 => 'A1',
        11 => 'A2',
        12 => 'A3',
        13 => 'A4',
        14 => 'GND',
        15 => 'D0',
        16 => 'D1',
        17 => 'D2',
        18 => 'D3',
        19 => 'D4',
        20 => 'D5',
        21 => 'D6',
        22 => 'D7',
        23 => 'POTY',
        24 => 'POTX',
        25 => 'Vcc',
        26 => 'EXT IN',
        27 => 'AUDIO OUT',
        28 => 'Vdd',
      ),
    ),
  ),
  '6809E' => 
  array (
    'description' => '8-bit microprocessor',
    'aliases' => 
    array (
      0 => '68A09E',
      1 => '68B09E',
    ),
    'family' => 'Motorola',
    'datasheet' => 'http://www.classiccmp.org/dunfield/r/6809e.pdf',
    'pins' => 
    array (
      'Vss' => 
      array (
        'desc' => 'ground',
      ),
      '~NMI' => 
      array (
        'desc' => 'non-maskable interrupt (active low)',
      ),
      '~IRQ' => 
      array (
        'desc' => 'interrupt request (active low)',
      ),
      '~FIRQ' => 
      array (
        'desc' => 'fast interrupt request (active low)',
      ),
      'BS' => 
      array (
        'desc' => 'bus status output',
      ),
      'BA' => 
      array (
        'desc' => 'bus available output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'A0' => 
      array (
        'desc' => 'address bus',
      ),
      'A1' => 
      array (
        'desc' => 'address bus',
      ),
      'A2' => 
      array (
        'desc' => 'address bus',
      ),
      'A3' => 
      array (
        'desc' => 'address bus',
      ),
      'A4' => 
      array (
        'desc' => 'address bus',
      ),
      'A5' => 
      array (
        'desc' => 'address bus',
      ),
      'A6' => 
      array (
        'desc' => 'address bus',
      ),
      'A7' => 
      array (
        'desc' => 'address bus',
      ),
      'A8' => 
      array (
        'desc' => 'address bus',
      ),
      'A9' => 
      array (
        'desc' => 'address bus',
      ),
      'A10' => 
      array (
        'desc' => 'address bus',
      ),
      'A11' => 
      array (
        'desc' => 'address bus',
      ),
      'A12' => 
      array (
        'desc' => 'address bus',
      ),
      'A13' => 
      array (
        'desc' => 'address bus',
      ),
      'A14' => 
      array (
        'desc' => 'address bus',
      ),
      'A15' => 
      array (
        'desc' => 'address bus',
      ),
      'D7' => 
      array (
        'desc' => 'data bus',
      ),
      'D6' => 
      array (
        'desc' => 'data bus',
      ),
      'D5' => 
      array (
        'desc' => 'data bus',
      ),
      'D4' => 
      array (
        'desc' => 'data bus',
      ),
      'D3' => 
      array (
        'desc' => 'data bus',
      ),
      'D2' => 
      array (
        'desc' => 'data bus',
      ),
      'D1' => 
      array (
        'desc' => 'data bus',
      ),
      'D0' => 
      array (
        'desc' => 'data bus',
      ),
      'R/~W' => 
      array (
        'desc' => 'bus read/write',
      ),
      'BUSY' => 
      array (
        'desc' => 'busy status',
      ),
      'E' => 
      array (
        'desc' => 'clock input',
      ),
      'Q' => 
      array (
        'desc' => 'quadrature clock input',
      ),
      'AVMA' => 
      array (
        'desc' => 'advanced VMA signal (indicates bus will be used in the next cycle)',
      ),
      '~RESET' => 
      array (
        'desc' => 'reset (active low)',
      ),
      'LIC' => 
      array (
        'desc' => 'last instruction cycle (high during last cycle of instruction)',
      ),
      'TSC' => 
      array (
        'desc' => 'three-state control (active high; tri-states address, data, R/~W~)',
      ),
      '~HALT' => 
      array (
        'desc' => 'halt (active low)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Clock speed',
        'val' => 
        array (
          0 => '1 (6809E)',
          1 => '1.5 (68A09E)',
          2 => '2 (68B09E)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Registers:
<table>
<tr><td>A, B</td><td>8-bit Accumulators (can be combined into 16-bit accumulator, D)</td></tr>
<tr><td>X</td><td>16-bit Index Register</td></tr>
<tr><td>Y</td><td>16-bit Index Register</td></tr>
<tr><td>U</td><td>16-bit User Stack Pointer</td></tr>
<tr><td>S</td><td>16-bit Hardware Stack Pointer</td></tr>
<tr><td>PC</td><td>16-bit Program Counter</td></tr>
<tr><td>DP</td><td>8-bit Direct Page Register</td></tr>
<tr><td>CC</td><td>8-bit Condition Code Register</td></tr>
</table><br/>',
      1 => 'Condition code bits: EFHINZVC
<table>
<tr><td>E</td><td>(bit 7)</td><td>Entire machine state was stacked</td></tr>
<tr><td>F</td><td>(bit 6)</td><td>~FIRQ inhibit flag</td></tr>
<tr><td>H</td><td>(bit 5)</td><td>Half-carry flag (valid only after ADC or ADD instructions)</td></tr>
<tr><td>I</td><td>(bit 4)</td><td>~IRQ inhibit flag</td></tr>
<tr><td>N</td><td>(bit 3)</td><td>Negative flag (most significant bit of previous result)</td></tr>
<tr><td>Z</td><td>(bit 2)</td><td>Zero flag</td></tr>
<tr><td>V</td><td>(bit 1)</td><td>Signed two\'s complement overflow flag</td></tr>
<tr><td>C</td><td>(bit 0)</td><td>Carry flag</td></tr>
</table><br/>',
      2 => 'Register stacking order:
<table>
<tr><td>CC</td><td>(pulled first, pushed last)</td></tr>
<tr><td>A</td><td></td></tr>
<tr><td>B</td><td></td></tr>
<tr><td>DP</td><td></td></tr>
<tr><td>X msb</td><td></td></tr>
<tr><td>X lsb</td><td></td></tr>
<tr><td>Y msb</td><td></td></tr>
<tr><td>Y lsb</td><td></td></tr>
<tr><td>U/S msb</td><td></td></tr>
<tr><td>U/S lsb</td><td></td></tr>
<tr><td>PC msb</td><td></td></tr>
<tr><td>PC lsb</td><td>(pulled last, pushed first)</td></tr>
</table><br/>',
      3 => 'Interrupt vectors:
<table>
<tr><td>FFFE-FFFF</td><td>~RESET</td></tr>
<tr><td>FFFC-FFFD</td><td>~NMI</td></tr>
<tr><td>FFFA-FFFB</td><td>SWI</td></tr>
<tr><td>FFF8-FFF9</td><td>~IRQ</td></tr>
<tr><td>FFF6-FFF7</td><td>~FIRQ</td></tr>
<tr><td>FFF4-FFF5</td><td>SWI2</td></tr>
<tr><td>FFF2-FFF3</td><td>SWI3</td></tr>
<tr><td>FFF1-FFF1</td><td>Reserved</td></tr>
</table>',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Vss',
        2 => '~NMI',
        3 => '~IRQ',
        4 => '~FIRQ',
        5 => 'BS',
        6 => 'BA',
        7 => 'Vcc',
        8 => 'A0',
        9 => 'A1',
        10 => 'A2',
        11 => 'A3',
        12 => 'A4',
        13 => 'A5',
        14 => 'A6',
        15 => 'A7',
        16 => 'A8',
        17 => 'A9',
        18 => 'A10',
        19 => 'A11',
        20 => 'A12',
        21 => 'A13',
        22 => 'A14',
        23 => 'A15',
        24 => 'D7',
        25 => 'D6',
        26 => 'D5',
        27 => 'D4',
        28 => 'D3',
        29 => 'D2',
        30 => 'D1',
        31 => 'D0',
        32 => 'R/~W',
        33 => 'BUSY',
        34 => 'E',
        35 => 'Q',
        36 => 'AVMA',
        37 => '~RESET',
        38 => 'LIC',
        39 => 'TSC',
        40 => '~HALT',
      ),
    ),
  ),
  6821 => 
  array (
    'description' => 'Peripheral interface adapter',
    'aliases' => 
    array (
      0 => '68A21',
      1 => '68B21',
    ),
    'family' => 'Motorola',
    'datasheet' => 'http://www.jameco.com/Jameco/Products/ProdDS/43596MOT.pdf',
    'pins' => 
    array (
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'PA0' => 
      array (
        'desc' => 'port A',
      ),
      'PA1' => 
      array (
        'desc' => 'port A',
      ),
      'PA2' => 
      array (
        'desc' => 'port A',
      ),
      'PA3' => 
      array (
        'desc' => 'port A',
      ),
      'PA4' => 
      array (
        'desc' => 'port A',
      ),
      'PA5' => 
      array (
        'desc' => 'port A',
      ),
      'PA6' => 
      array (
        'desc' => 'port A',
      ),
      'PA7' => 
      array (
        'desc' => 'port A',
      ),
      'PB0' => 
      array (
        'desc' => 'port B',
      ),
      'PB1' => 
      array (
        'desc' => 'port B',
      ),
      'PB2' => 
      array (
        'desc' => 'port B',
      ),
      'PB3' => 
      array (
        'desc' => 'port B',
      ),
      'PB4' => 
      array (
        'desc' => 'port B',
      ),
      'PB5' => 
      array (
        'desc' => 'port B',
      ),
      'PB6' => 
      array (
        'desc' => 'port B',
      ),
      'PB7' => 
      array (
        'desc' => 'port B',
      ),
      'CB1' => 
      array (
        'desc' => 'peripheral control (port B)',
      ),
      'CB2' => 
      array (
        'desc' => 'peripheral control (port B)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'R/~W' => 
      array (
        'desc' => 'read/write',
      ),
      'CS0' => 
      array (
        'desc' => 'chip select (active high)',
      ),
      '~CS2' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      'CS1' => 
      array (
        'desc' => 'chip select (active high)',
      ),
      'E' => 
      array (
        'desc' => 'clock',
      ),
      'D7' => 
      array (
        'desc' => 'data bus',
      ),
      'D6' => 
      array (
        'desc' => 'data bus',
      ),
      'D5' => 
      array (
        'desc' => 'data bus',
      ),
      'D4' => 
      array (
        'desc' => 'data bus',
      ),
      'D3' => 
      array (
        'desc' => 'data bus',
      ),
      'D2' => 
      array (
        'desc' => 'data bus',
      ),
      'D1' => 
      array (
        'desc' => 'data bus',
      ),
      'D0' => 
      array (
        'desc' => 'data bus',
      ),
      '~RESET' => 
      array (
        'desc' => 'master reset (active low)',
      ),
      'RS1' => 
      array (
        'desc' => 'register select (address bus)',
      ),
      'RS0' => 
      array (
        'desc' => 'register select (address bus)',
      ),
      '~IRQB' => 
      array (
        'desc' => 'interrupt output (active low)',
      ),
      '~IRQA' => 
      array (
        'desc' => 'interrupt output (active low)',
      ),
      'CA2' => 
      array (
        'desc' => 'peripheral control (port A)',
      ),
      'CA1' => 
      array (
        'desc' => 'peripheral control (port A)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Max. clock frequency',
        'val' => 
        array (
          0 => '1 (6821)',
          1 => '1.5 (68A21)',
          2 => '2 (68B21)',
        ),
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'Pulse width, E low',
        'val' => 
        array (
          0 => '430 (6821)',
          1 => '280 (68A21)',
          2 => '210 (68B21)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Pulse width, E high',
        'val' => 
        array (
          0 => '450 (6821)',
          1 => '280 (68A21)',
          2 => '220 (68B21)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Min. ~RESET pulse length',
        'val' => '1',
        'unit' => 'µs',
      ),
    ),
    'notes' => 
    array (
      0 => 'Port A is designed to drive CMOS logic to normal 30%/70% levels.',
      1 => 'Port B uses three-state NMOS buffers and requires external resistors to pull up to CMOS levels.',
      2 => 'Port B is capable of driving Darlingtons.',
      3 => 'When in output mode, a read of Port A returns the actual pin states.',
      4 => 'When in output mode, a read of Port B returns the contents of the output latch.',
      5 => 'RS=00, bit 2 of control register A=1: peripheral register A',
      6 => 'RS=00, bit 2 of control register A=0: data direction register A',
      7 => 'RS=01: control register A',
      8 => 'RS=10, bit 2 of control register B=1: peripheral register B',
      9 => 'RS=10, bit 2 of control register B=0: data direction register B',
      10 => 'RS=11: control register B',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GND',
        2 => 'PA0',
        3 => 'PA1',
        4 => 'PA2',
        5 => 'PA3',
        6 => 'PA4',
        7 => 'PA5',
        8 => 'PA6',
        9 => 'PA7',
        10 => 'PB0',
        11 => 'PB1',
        12 => 'PB2',
        13 => 'PB3',
        14 => 'PB4',
        15 => 'PB5',
        16 => 'PB6',
        17 => 'PB7',
        18 => 'CB1',
        19 => 'CB2',
        20 => 'Vcc',
        21 => 'R/~W',
        22 => 'CS0',
        23 => '~CS2',
        24 => 'CS1',
        25 => 'E',
        26 => 'D7',
        27 => 'D6',
        28 => 'D5',
        29 => 'D4',
        30 => 'D3',
        31 => 'D2',
        32 => 'D1',
        33 => 'D0',
        34 => '~RESET',
        35 => 'RS1',
        36 => 'RS0',
        37 => '~IRQB',
        38 => '~IRQA',
        39 => 'CA2',
        40 => 'CA1',
      ),
    ),
  ),
  '6N137' => 
  array (
    'description' => '10 MBit/s single-channel high speed logic gate output optocoupler',
    'aliases' => 
    array (
      0 => 'HCPL2601',
      1 => 'HCPL2611',
    ),
    'family' => 'Fairchild',
    'datasheet' => 'http://www.fairchildsemi.com/ds/6N/6N137.pdf',
    'pins' => 
    array (
      'N/C' => 
      array (
        'desc' => 'no connection',
      ),
      'V__F +' => 
      array (
        'desc' => 'emitter, anode',
      ),
      'V__F -' => 
      array (
        'desc' => 'emitter, cathode',
      ),
      'GND' => 
      array (
        'desc' => 'supply ground',
      ),
      'V__O' => 
      array (
        'desc' => 'output',
      ),
      'V__E' => 
      array (
        'desc' => 'enable input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage, minimum',
        'val' => '4.5',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Supply voltage, maxmimum',
        'val' => '5.5',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input forward voltage, typical @ 25C',
        'val' => '1.4',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Input forward voltage, typical @ 25C',
        'val' => '1.4',
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Input forward voltage, max',
        'val' => '1.8',
        'unit' => 'V',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'N/C',
        2 => 'V__F +',
        3 => 'V__F -',
        4 => 'N/C',
        5 => 'GND',
        6 => 'V__O',
        7 => 'V__E',
        8 => 'Vcc',
      ),
    ),
  ),
  7400 => 
  array (
    'description' => 'Quad 2-input NAND gate',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT00_3.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '10 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2A',
        5 => '2B',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3B',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  7402 => 
  array (
    'description' => 'Quad 2-input NOR gate',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT02_3.pdf',
    'pins' => 
    array (
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '9 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1Y',
        2 => '1A',
        3 => '1B',
        4 => '2Y',
        5 => '2A',
        6 => '2B',
        7 => 'GND',
        8 => '3A',
        9 => '3B',
        10 => '3Y',
        11 => '4A',
        12 => '4B',
        13 => '4Y',
        14 => 'Vcc',
      ),
    ),
  ),
  7404 => 
  array (
    'description' => 'Hex inverter',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT04_3.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'data output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'data output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '8 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1Y',
        3 => '2A',
        4 => '2Y',
        5 => '3A',
        6 => '3Y',
        7 => 'GND',
        8 => '4Y',
        9 => '4A',
        10 => '5Y',
        11 => '5A',
        12 => '6Y',
        13 => '6A',
        14 => 'Vcc',
      ),
    ),
  ),
  7408 => 
  array (
    'description' => 'Quad 2-input AND gate',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT08_3.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2A',
        5 => '2B',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3B',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  741 => 
  array (
    'description' => 'Operational amplifier',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM741.pdf',
    'pins' => 
    array (
      'OFFSET NULL' => 
      array (
        'desc' => 'offset null',
      ),
      'IN-' => 
      array (
        'desc' => 'inverting input',
      ),
      'IN+' => 
      array (
        'desc' => 'non-inverting input',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '±10 (min)',
          1 => '±22 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '±15',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '0.5',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Supply current',
        'val' => '1.7',
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'A 10 kΩ potentiometer connected to pins 1 and 5 can be used to null any offset voltage.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'OFFSET NULL',
        2 => 'IN-',
        3 => 'IN+',
        4 => 'Vss',
        5 => 'OFFSET NULL',
        6 => 'OUT',
        7 => 'Vcc',
        8 => 'NC',
      ),
    ),
  ),
  7410 => 
  array (
    'description' => 'Triple 3-input NAND gate',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT10_CNV_2.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3C' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '2A',
        4 => '2B',
        5 => '2C',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3B',
        11 => '3C',
        12 => '1Y',
        13 => '1C',
        14 => 'Vcc',
      ),
    ),
  ),
  74107 => 
  array (
    'description' => 'Dual J-K flip-flop with reset; negative-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc107.74hct107.pdf',
    'pins' => 
    array (
      '1J' => 
      array (
        'desc' => 'synchronous input',
      ),
      '1~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '1Q' => 
      array (
        'desc' => 'true output',
      ),
      '1K' => 
      array (
        'desc' => 'synchronous input',
      ),
      '2Q' => 
      array (
        'desc' => 'true output',
      ),
      '2~Q' => 
      array (
        'desc' => 'complement output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2J' => 
      array (
        'desc' => 'synchronous input',
      ),
      '2~CP' => 
      array (
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      '2~R' => 
      array (
        'desc' => 'asynchronous reset (active low)',
      ),
      '2K' => 
      array (
        'desc' => 'synchronous input',
      ),
      '1~CP' => 
      array (
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      '1~R' => 
      array (
        'desc' => 'asynchronous reset (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP to nQ',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~CP to n~Q',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R to nQ, n~Q',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '78 (74HC)',
          1 => '73 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1J',
        2 => '1~Q',
        3 => '1Q',
        4 => '1K',
        5 => '2Q',
        6 => '2~Q',
        7 => 'GND',
        8 => '2J',
        9 => '2~CP',
        10 => '2~R',
        11 => '2K',
        12 => '1~CP',
        13 => '1~R',
        14 => 'Vcc',
      ),
    ),
  ),
  74109 => 
  array (
    'description' => 'Dual J-K flip-flop with set and reset; positive-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc109.74hct109.pdf',
    'pins' => 
    array (
      '1~R~__D' => 
      array (
        'desc' => 'asynchronous reset; direct input (active low)',
      ),
      '1J' => 
      array (
        'desc' => 'synchronous input',
      ),
      '1~K' => 
      array (
        'desc' => 'synchronous input',
      ),
      '1CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      '1~S~__D' => 
      array (
        'desc' => 'asynchronous set; direct input (active low)',
      ),
      '1Q' => 
      array (
        'desc' => 'true output',
      ),
      '1~Q' => 
      array (
        'desc' => 'complement output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '2Q' => 
      array (
        'desc' => 'true output',
      ),
      '2~S~__D' => 
      array (
        'desc' => 'asynchronous set; direct input (active low)',
      ),
      '2CP' => 
      array (
        'desc' => 'clock input (low-to-high, active low)',
      ),
      '2~K' => 
      array (
        'desc' => 'synchronous input',
      ),
      '2J' => 
      array (
        'desc' => 'synchronous input',
      ),
      '2~R~__D' => 
      array (
        'desc' => 'asynchronous reset; direct input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nCP to nQ, n~Q',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~S~__D to nQ, n~Q',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R~__D to nQ, n~Q',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '75 (74HC)',
          1 => '61 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~R~__D',
        2 => '1J',
        3 => '1~K',
        4 => '1CP',
        5 => '1~S~__D',
        6 => '1Q',
        7 => '1~Q',
        8 => 'GND',
        9 => '2~Q',
        10 => '2Q',
        11 => '2~S~__D',
        12 => '2CP',
        13 => '2~K',
        14 => '2J',
        15 => '2~R~__D',
        16 => 'Vcc',
      ),
    ),
  ),
  7411 => 
  array (
    'description' => 'Triple 3-input AND gate',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc11.74hct11.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3C' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC to nY',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '2A',
        4 => '2B',
        5 => '2C',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3B',
        11 => '3C',
        12 => '1Y',
        13 => '1C',
        14 => 'Vcc',
      ),
    ),
  ),
  74112 => 
  array (
    'description' => 'Dual J-K flip-flop with set and reset; negative-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc112.74hct112.pdf',
    'pins' => 
    array (
      '1~CP' => 
      array (
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      '1K' => 
      array (
        'desc' => 'synchronous input',
      ),
      '1J' => 
      array (
        'desc' => 'synchronous input',
      ),
      '1~S~__D' => 
      array (
        'desc' => 'asynchronous set; direct input (active low)',
      ),
      '1Q' => 
      array (
        'desc' => 'true output',
      ),
      '1~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '2~Q' => 
      array (
        'desc' => 'complement output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2Q' => 
      array (
        'desc' => 'true output',
      ),
      '2~S~__D' => 
      array (
        'desc' => 'asynchronous set; direct input (active low)',
      ),
      '2J' => 
      array (
        'desc' => 'synchronous input',
      ),
      '2K' => 
      array (
        'desc' => 'synchronous input',
      ),
      '2~CP' => 
      array (
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      '2~R~__D' => 
      array (
        'desc' => 'asynchronous reset; direct input (active low)',
      ),
      '1~R~__D' => 
      array (
        'desc' => 'asynchronous reset; direct input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP to nQ, n~Q',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~S~__D to nQ, n~Q',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R~__D to nQ, n~Q',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '66 (74HC)',
          1 => '70 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~CP',
        2 => '1K',
        3 => '1J',
        4 => '1~S~__D',
        5 => '1Q',
        6 => '1~Q',
        7 => '2~Q',
        8 => 'GND',
        9 => '2Q',
        10 => '2~S~__D',
        11 => '2J',
        12 => '2K',
        13 => '2~CP',
        14 => '2~R~__D',
        15 => '1~R~__D',
        16 => 'Vcc',
      ),
    ),
  ),
  74123 => 
  array (
    'description' => 'Dual retriggerable monostable multivibrator with reset',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc123.74hct123.pdf',
    'pins' => 
    array (
      '1~A' => 
      array (
        'desc' => 'negative-edge triggered input 1',
      ),
      '1B' => 
      array (
        'desc' => 'positive-edge triggered input 1',
      ),
      '1~R~D' => 
      array (
        'desc' => 'direct reset (active low) and positive-edge triggered input 1',
      ),
      '1~Q' => 
      array (
        'desc' => 'active low output 1',
      ),
      '2Q' => 
      array (
        'desc' => 'active high output 2',
      ),
      '2CEXT' => 
      array (
        'desc' => 'external capacitor connection 2',
      ),
      '2REXT/CEXT' => 
      array (
        'desc' => 'external resistor and capacitor connection 2',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~A' => 
      array (
        'desc' => 'negative-edge triggered input 2',
      ),
      '2B' => 
      array (
        'desc' => 'positive-edge triggered input 2',
      ),
      '2~R~D' => 
      array (
        'desc' => 'direct reset (active low) and positive-edge triggered input 2',
      ),
      '2~Q' => 
      array (
        'desc' => 'active low output 2',
      ),
      '1Q' => 
      array (
        'desc' => 'active high output 1',
      ),
      '1CEXT' => 
      array (
        'desc' => 'external capacitor connection 1',
      ),
      '1REXT/CEXT' => 
      array (
        'desc' => 'external resistor and capacitor connection 1',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~R~D, n~A, nB to nQ or n~Q',
        'val' => 
        array (
          0 => '26 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~R~D to nQ or n~Q',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Output transition time',
        'val' => 
        array (
          0 => '7 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Retrigger time n~A, nB',
        'val' => 
        array (
          0 => '110 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'External timing resistor',
        'val' => 
        array (
          0 => '2 (min)',
          1 => '1000 (max)',
        ),
        'unit' => 'kΩ',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~A',
        2 => '1B',
        3 => '1~R~D',
        4 => '1~Q',
        5 => '2Q',
        6 => '2CEXT',
        7 => '2REXT/CEXT',
        8 => 'GND',
        9 => '2~A',
        10 => '2B',
        11 => '2~R~D',
        12 => '2~Q',
        13 => '1Q',
        14 => '1CEXT',
        15 => '1REXT/CEXT',
        16 => 'Vcc',
      ),
    ),
  ),
  74125 => 
  array (
    'description' => 'Quad buffer/line driver with active low output enable; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc125.74hct125.pdf',
    'pins' => 
    array (
      '1~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~OE',
        2 => '1A',
        3 => '1Y',
        4 => '2~OE',
        5 => '2A',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3~OE',
        11 => '4Y',
        12 => '4A',
        13 => '4~OE',
        14 => 'Vcc',
      ),
    ),
  ),
  74126 => 
  array (
    'description' => 'Quad buffer/line driver with active high output enable; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc126.74hct126.pdf',
    'pins' => 
    array (
      '1OE' => 
      array (
        'desc' => 'output enable (active high)',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2OE' => 
      array (
        'desc' => 'output enable (active high)',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3OE' => 
      array (
        'desc' => 'output enable (active high)',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4OE' => 
      array (
        'desc' => 'output enable (active high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OE',
        2 => '1A',
        3 => '1Y',
        4 => '2OE',
        5 => '2A',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3OE',
        11 => '4Y',
        12 => '4A',
        13 => '4OE',
        14 => 'Vcc',
      ),
    ),
  ),
  74132 => 
  array (
    'description' => 'Quad 2-input NAND Schmitt trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc132.74hct132.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2A',
        5 => '2B',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3B',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  74137 => 
  array (
    'description' => '3-to-8 line decoder/demultiplexer with address latches; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc137.pdf',
    'pins' => 
    array (
      'A0' => 
      array (
        'desc' => 'data input 0',
      ),
      'A1' => 
      array (
        'desc' => 'data input 1',
      ),
      'A2' => 
      array (
        'desc' => 'data input 2',
      ),
      '~LE' => 
      array (
        'desc' => 'latch enable input (active low)',
      ),
      '~E~1' => 
      array (
        'desc' => 'data enable input 1 (active low)',
      ),
      'E2' => 
      array (
        'desc' => 'data enable input 2 (active high)',
      ),
      '~Y~7' => 
      array (
        'desc' => 'output 7',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~Y~6' => 
      array (
        'desc' => 'output 6',
      ),
      '~Y~5' => 
      array (
        'desc' => 'output 5',
      ),
      '~Y~4' => 
      array (
        'desc' => 'output 4',
      ),
      '~Y~3' => 
      array (
        'desc' => 'output 3',
      ),
      '~Y~2' => 
      array (
        'desc' => 'output 2',
      ),
      '~Y~1' => 
      array (
        'desc' => 'output 1',
      ),
      '~Y~0' => 
      array (
        'desc' => 'output 0',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to ~Y~n',
        'val' => '18 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~LE to ~Y~n',
        'val' => '17 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E~1 to ~Y~n',
        'val' => '15 (74HC)',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, E2 to ~Y~n',
        'val' => '15 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A0',
        2 => 'A1',
        3 => 'A2',
        4 => '~LE',
        5 => '~E~1',
        6 => 'E2',
        7 => '~Y~7',
        8 => 'GND',
        9 => '~Y~6',
        10 => '~Y~5',
        11 => '~Y~4',
        12 => '~Y~3',
        13 => '~Y~2',
        14 => '~Y~1',
        15 => '~Y~0',
        16 => 'Vcc',
      ),
    ),
  ),
  74138 => 
  array (
    'description' => '3-to-8 line decoder/demultiplexer; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc138.74hct138.pdf',
    'pins' => 
    array (
      'A0' => 
      array (
        'desc' => 'data input 0',
      ),
      'A1' => 
      array (
        'desc' => 'data input 1',
      ),
      'A2' => 
      array (
        'desc' => 'data input 2',
      ),
      '~E~1' => 
      array (
        'desc' => 'enable input 1 (active low)',
      ),
      '~E~2' => 
      array (
        'desc' => 'enable input 2 (active low)',
      ),
      'E3' => 
      array (
        'desc' => 'enable input 3 (active high)',
      ),
      '~Y~7' => 
      array (
        'desc' => 'output 7',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~Y~6' => 
      array (
        'desc' => 'output 6',
      ),
      '~Y~5' => 
      array (
        'desc' => 'output 5',
      ),
      '~Y~4' => 
      array (
        'desc' => 'output 4',
      ),
      '~Y~3' => 
      array (
        'desc' => 'output 3',
      ),
      '~Y~2' => 
      array (
        'desc' => 'output 2',
      ),
      '~Y~1' => 
      array (
        'desc' => 'output 1',
      ),
      '~Y~0' => 
      array (
        'desc' => 'output 0',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to ~Y~n',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, E3 to ~Y~n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E~n to ~Y~n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A0',
        2 => 'A1',
        3 => 'A2',
        4 => '~E~1',
        5 => '~E~2',
        6 => 'E3',
        7 => '~Y~7',
        8 => 'GND',
        9 => '~Y~6',
        10 => '~Y~5',
        11 => '~Y~4',
        12 => '~Y~3',
        13 => '~Y~2',
        14 => '~Y~1',
        15 => '~Y~0',
        16 => 'Vcc',
      ),
    ),
  ),
  74139 => 
  array (
    'description' => 'Dual 2-to-4 line decoder/demultiplexer',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc139.74hct139.pdf',
    'pins' => 
    array (
      '1~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      '1A__0' => 
      array (
        'desc' => 'address input',
      ),
      '1A__1' => 
      array (
        'desc' => 'address input',
      ),
      '1~Y~__0' => 
      array (
        'desc' => 'output (active low)',
      ),
      '1~Y~__1' => 
      array (
        'desc' => 'output (active low)',
      ),
      '1~Y~__2' => 
      array (
        'desc' => 'output (active low)',
      ),
      '1~Y~__3' => 
      array (
        'desc' => 'output (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~Y~__3' => 
      array (
        'desc' => 'output (active low)',
      ),
      '2~Y~__2' => 
      array (
        'desc' => 'output (active low)',
      ),
      '2~Y~__1' => 
      array (
        'desc' => 'output (active low)',
      ),
      '2~Y~__0' => 
      array (
        'desc' => 'output (active low)',
      ),
      '2A__1' => 
      array (
        'desc' => 'address input',
      ),
      '2A__0' => 
      array (
        'desc' => 'address input',
      ),
      '2~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA__n to n~Y~__n',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~E to n~Y~__n',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~E',
        2 => '1A__0',
        3 => '1A__1',
        4 => '1~Y~__0',
        5 => '1~Y~__1',
        6 => '1~Y~__2',
        7 => '1~Y~__3',
        8 => 'GND',
        9 => '2~Y~__3',
        10 => '2~Y~__2',
        11 => '2~Y~__1',
        12 => '2~Y~__0',
        13 => '2A__1',
        14 => '2A__0',
        15 => '2~E',
        16 => 'Vcc',
      ),
    ),
  ),
  7414 => 
  array (
    'description' => 'Hex inverting Schmitt trigger',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT14_3.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'data output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'data output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Positive-going threshold (Vcc = 4.5V)',
        'val' => 
        array (
          0 => '2.38 (74HC)',
          1 => '1.41 (74HCT)',
        ),
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Negative-going threshold (Vcc = 4.5V)',
        'val' => 
        array (
          0 => '1.4 (74HC)',
          1 => '0.85 (74HCT)',
        ),
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Hysteresis',
        'val' => 
        array (
          0 => '0.98 (74HC)',
          1 => '0.56 (74HCT)',
        ),
        'unit' => 'V',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1Y',
        3 => '2A',
        4 => '2Y',
        5 => '3A',
        6 => '3Y',
        7 => 'GND',
        8 => '4Y',
        9 => '4A',
        10 => '5Y',
        11 => '5A',
        12 => '6Y',
        13 => '6A',
        14 => 'Vcc',
      ),
    ),
  ),
  74141 => 
  array (
    'description' => 'BCD-to-decimal decoder/Nixie tube driver',
    'aliases' => 
    array (
      0 => '7441',
      1 => 'K155ID1',
    ),
    'family' => '7400',
    'datasheet' => 'http://pdf1.alldatasheet.com/datasheet-pdf/view/115763/TI/SN74141/datasheet.pdf',
    'pins' => 
    array (
      8 => 
      array (
        'desc' => 'output 8',
      ),
      9 => 
      array (
        'desc' => 'output 9',
      ),
      'A' => 
      array (
        'desc' => 'BCD input',
      ),
      'D' => 
      array (
        'desc' => 'BCD input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'B' => 
      array (
        'desc' => 'BCD input',
      ),
      'C' => 
      array (
        'desc' => 'BCD input',
      ),
      2 => 
      array (
        'desc' => 'output 2',
      ),
      3 => 
      array (
        'desc' => 'output 3',
      ),
      7 => 
      array (
        'desc' => 'output 7',
      ),
      6 => 
      array (
        'desc' => 'output 6',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      4 => 
      array (
        'desc' => 'output 4',
      ),
      5 => 
      array (
        'desc' => 'output 5',
      ),
      1 => 
      array (
        'desc' => 'output 1',
      ),
      0 => 
      array (
        'desc' => 'output 0',
      ),
    ),
    'notes' => 
    array (
      0 => 'For binary inputs 10 through 15, behavior is manufacturer-specific. 7441s may enable one or more output. 74141s and K155ID1s will turn all outputs off, but the connected tube may not blank.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '8',
        2 => '9',
        3 => 'A',
        4 => 'D',
        5 => 'Vcc',
        6 => 'B',
        7 => 'C',
        8 => '2',
        9 => '3',
        10 => '7',
        11 => '6',
        12 => 'GND',
        13 => '4',
        14 => '5',
        15 => '1',
        16 => '0',
      ),
    ),
  ),
  74147 => 
  array (
    'description' => '10-to-4 line priority encoder',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc147.74hct147.pdf',
    'pins' => 
    array (
      '~A~__3' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~A~__4' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~A~__5' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~A~__6' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~A~__7' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~Y~__2' => 
      array (
        'desc' => 'BCD address output (active low)',
      ),
      '~Y~__1' => 
      array (
        'desc' => 'BCD address output (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~Y~__0' => 
      array (
        'desc' => 'BCD address output (active low)',
      ),
      '~A~__8' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~A~__0' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~A~__1' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~A~__2' => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      '~Y~__3' => 
      array (
        'desc' => 'BCD address output (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, ~A~__n to ~Y~__n',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When two or more inputs are simultaneously active, the input with the highest priority is represented on the output.',
      1 => '~A~__8 has the highest priority.',
      2 => 'When all nine data inputs are high, all four outputs are high. (BCD zero)',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~A~__3',
        2 => '~A~__4',
        3 => '~A~__5',
        4 => '~A~__6',
        5 => '~A~__7',
        6 => '~Y~__2',
        7 => '~Y~__1',
        8 => 'GND',
        9 => '~Y~__0',
        10 => '~A~__8',
        11 => '~A~__0',
        12 => '~A~__1',
        13 => '~A~__2',
        14 => '~Y~__3',
        15 => 'NC',
        16 => 'Vcc',
      ),
    ),
  ),
  74148 => 
  array (
    'description' => '8-to-3 line priority encoder',
    'family' => '7400',
    'datasheet' => 'http://www.ti.com/lit/ds/scls109g/scls109g.pdf',
    'pins' => 
    array (
      4 => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      5 => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      6 => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      7 => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      'EI' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'A2' => 
      array (
        'desc' => 'binary address output (active low)',
      ),
      'A1' => 
      array (
        'desc' => 'BCD address output (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'A0' => 
      array (
        'desc' => 'binary address output (active low)',
      ),
      0 => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      1 => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      2 => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      3 => 
      array (
        'desc' => 'decimal data input (active low)',
      ),
      'GS' => 
      array (
        'desc' => 'goes low when EI is low and any input is low',
      ),
      'EO' => 
      array (
        'desc' => 'goes high when EI is low and any input is low (EO = ~GS~)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n to An',
        'val' => 
        array (
          0 => '16 (74HC)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When two or more inputs are simultaneously active, the input with the highest priority is represented on the output.',
      1 => 'Input 7 has the highest priority.',
      2 => 'When all eight data inputs are high, all three outputs are high.',
      3 => 'Multiple 74148s can be cascaded by connecting EO of the high priority chip to EI of the low priority chip (see datasheet).',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '4',
        2 => '5',
        3 => '6',
        4 => '7',
        5 => 'EI',
        6 => 'A2',
        7 => 'A1',
        8 => 'GND',
        9 => 'A0',
        10 => '0',
        11 => '1',
        12 => '2',
        13 => '3',
        14 => 'GS',
        15 => 'EO',
        16 => 'Vcc',
      ),
    ),
  ),
  74151 => 
  array (
    'description' => '8-input multiplexer',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc151.74hct151.pdf',
    'pins' => 
    array (
      'I__3' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__2' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__1' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__0' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '~Y' => 
      array (
        'desc' => 'complementary multiplexer output',
      ),
      '~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'S__2' => 
      array (
        'desc' => 'select input',
      ),
      'S__1' => 
      array (
        'desc' => 'select input',
      ),
      'S__0' => 
      array (
        'desc' => 'select input',
      ),
      'I__7' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__6' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__5' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__4' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, I__n to Y, ~Y',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S__n to Y, ~Y',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E to Y',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, ~E to ~Y',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'I__3',
        2 => 'I__2',
        3 => 'I__1',
        4 => 'I__0',
        5 => 'Y',
        6 => '~Y',
        7 => '~E',
        8 => 'GND',
        9 => 'S__2',
        10 => 'S__1',
        11 => 'S__0',
        12 => 'I__7',
        13 => 'I__6',
        14 => 'I__5',
        15 => 'I__4',
        16 => 'Vcc',
      ),
    ),
  ),
  74153 => 
  array (
    'description' => 'Dual 4-input multiplexer',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc153.74hct153.pdf',
    'pins' => 
    array (
      '1~E' => 
      array (
        'desc' => 'enable input 1',
      ),
      'S__1' => 
      array (
        'desc' => 'common data select input',
      ),
      '1I__3' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1I__2' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1I__0' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1Y' => 
      array (
        'desc' => 'multiplexer output from source 1',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2Y' => 
      array (
        'desc' => 'multiplexer output from source 2',
      ),
      '2I__0' => 
      array (
        'desc' => 'data input from source 2',
      ),
      '2I__1' => 
      array (
        'desc' => 'data input from source 2',
      ),
      '2I__2' => 
      array (
        'desc' => 'data input from source 2',
      ),
      '2I__3' => 
      array (
        'desc' => 'data input from source 2',
      ),
      'S__0' => 
      array (
        'desc' => 'common data select input',
      ),
      '2~E' => 
      array (
        'desc' => 'enable input 2',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, 1I__n, 2I__n to nY',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S__n to nY',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~E to nY',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~E',
        2 => 'S__1',
        3 => '1I__3',
        4 => '1I__2',
        5 => '1I__1',
        6 => '1I__0',
        7 => '1Y',
        8 => 'GND',
        9 => '2Y',
        10 => '2I__0',
        11 => '2I__1',
        12 => '2I__2',
        13 => '2I__3',
        14 => 'S__0',
        15 => '2~E',
        16 => 'Vcc',
      ),
    ),
  ),
  74154 => 
  array (
    'description' => '4-to-16 line decoder/demultiplexer',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc154.74hct154.pdf',
    'pins' => 
    array (
      '~Y~0' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~1' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~2' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~3' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~4' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~5' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~6' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~7' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~8' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~9' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~10' => 
      array (
        'desc' => 'data output (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~Y~11' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~12' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~13' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~14' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~Y~15' => 
      array (
        'desc' => 'data output (active low)',
      ),
      '~E~0' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      '~E~1' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'A3' => 
      array (
        'desc' => 'address input',
      ),
      'A2' => 
      array (
        'desc' => 'address input',
      ),
      'A1' => 
      array (
        'desc' => 'address input',
      ),
      'A0' => 
      array (
        'desc' => 'address input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to ~Y~n',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~E~n to ~Y~n',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~Y~0',
        2 => '~Y~1',
        3 => '~Y~2',
        4 => '~Y~3',
        5 => '~Y~4',
        6 => '~Y~5',
        7 => '~Y~6',
        8 => '~Y~7',
        9 => '~Y~8',
        10 => '~Y~9',
        11 => '~Y~10',
        12 => 'GND',
        13 => '~Y~11',
        14 => '~Y~12',
        15 => '~Y~13',
        16 => '~Y~14',
        17 => '~Y~15',
        18 => '~E~0',
        19 => '~E~1',
        20 => 'A3',
        21 => 'A2',
        22 => 'A1',
        23 => 'A0',
        24 => 'Vcc',
      ),
    ),
  ),
  74157 => 
  array (
    'description' => 'Quad 2-input multiplexer',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc157.74hct157.pdf',
    'pins' => 
    array (
      'S' => 
      array (
        'desc' => 'common data select input',
      ),
      '1I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '1I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '2I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '2I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '2Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '3I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '3I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '4Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '4I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '4I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nI__0, nI__1 to nY',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~E to nY',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, S to nY',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'S',
        2 => '1I__0',
        3 => '1I__1',
        4 => '1Y',
        5 => '2I__0',
        6 => '2I__1',
        7 => '2Y',
        8 => 'GND',
        9 => '3Y',
        10 => '3I__1',
        11 => '3I__0',
        12 => '4Y',
        13 => '4I__1',
        14 => '4I__0',
        15 => '~E',
        16 => 'Vcc',
      ),
    ),
  ),
  74158 => 
  array (
    'description' => 'Quad 2-input multiplexer; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc158.pdf',
    'pins' => 
    array (
      'S' => 
      array (
        'desc' => 'common data select input',
      ),
      '1I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '1I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1~Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '2I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '2I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '2~Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3~Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '3I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '3I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '4~Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '4I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '4I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '~E' => 
      array (
        'desc' => 'enable input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nI__0, nI__1 to n~Y',
        'val' => '12 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~E to n~Y',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, S to n~Y',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'S',
        2 => '1I__0',
        3 => '1I__1',
        4 => '1~Y',
        5 => '2I__0',
        6 => '2I__1',
        7 => '2~Y',
        8 => 'GND',
        9 => '3~Y',
        10 => '3I__1',
        11 => '3I__0',
        12 => '4~Y',
        13 => '4I__1',
        14 => '4I__0',
        15 => '~E',
        16 => 'Vcc',
      ),
    ),
  ),
  74160 => 
  array (
    'description' => 'Presettable synchronous BCD decade counter; asynchronous reset',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc160.74hct160.pdf',
    'pins' => 
    array (
      '~MR' => 
      array (
        'desc' => 'asynchronous master reset (active low)',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'CEP' => 
      array (
        'desc' => 'count enable input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~PE' => 
      array (
        'desc' => 'parallel load enable input (active low)',
      ),
      'CET' => 
      array (
        'desc' => 'count enable carry output',
      ),
      'Q__3' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__2' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__1' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__0' => 
      array (
        'desc' => 'counter output',
      ),
      'TC' => 
      array (
        'desc' => 'terminal count output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '21 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP to TC',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '24 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, ~MR to TC',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, CET to TC',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '61 (74HC)',
          1 => '31 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MR',
        2 => 'CP',
        3 => 'D__0',
        4 => 'D__1',
        5 => 'D__2',
        6 => 'D__3',
        7 => 'CEP',
        8 => 'GND',
        9 => '~PE',
        10 => 'CET',
        11 => 'Q__3',
        12 => 'Q__2',
        13 => 'Q__1',
        14 => 'Q__0',
        15 => 'TC',
        16 => 'Vcc',
      ),
    ),
  ),
  74161 => 
  array (
    'description' => 'Presettable synchronous 4-bit binary counter; asynchronous reset',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc161.74hct161.pdf',
    'pins' => 
    array (
      '~MR' => 
      array (
        'desc' => 'asynchronous master reset (active low)',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'CEP' => 
      array (
        'desc' => 'count enable input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~PE' => 
      array (
        'desc' => 'parallel load enable input (active low)',
      ),
      'CET' => 
      array (
        'desc' => 'count enable carry output',
      ),
      'Q__3' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__2' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__1' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__0' => 
      array (
        'desc' => 'counter output',
      ),
      'TC' => 
      array (
        'desc' => 'terminal count output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP to TC',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '24 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '25 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, ~MR to TC',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, CET to TC',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '44 (74HC)',
          1 => '45 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MR',
        2 => 'CP',
        3 => 'D__0',
        4 => 'D__1',
        5 => 'D__2',
        6 => 'D__3',
        7 => 'CEP',
        8 => 'GND',
        9 => '~PE',
        10 => 'CET',
        11 => 'Q__3',
        12 => 'Q__2',
        13 => 'Q__1',
        14 => 'Q__0',
        15 => 'TC',
        16 => 'Vcc',
      ),
    ),
  ),
  74163 => 
  array (
    'description' => 'Presettable synchronous 4-bit binary counter; synchronous reset',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc163.74hct163.pdf',
    'pins' => 
    array (
      '~MR' => 
      array (
        'desc' => 'synchronous master reset (active low)',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'CEP' => 
      array (
        'desc' => 'count enable input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~PE' => 
      array (
        'desc' => 'parallel load enable input (active low)',
      ),
      'CET' => 
      array (
        'desc' => 'count enable carry output',
      ),
      'Q__3' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__2' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__1' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__0' => 
      array (
        'desc' => 'counter output',
      ),
      'TC' => 
      array (
        'desc' => 'terminal count output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP to TC',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '25 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, CET to TC',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '51 (74HC)',
          1 => '50 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MR',
        2 => 'CP',
        3 => 'D__0',
        4 => 'D__1',
        5 => 'D__2',
        6 => 'D__3',
        7 => 'CEP',
        8 => 'GND',
        9 => '~PE',
        10 => 'CET',
        11 => 'Q__3',
        12 => 'Q__2',
        13 => 'Q__1',
        14 => 'Q__0',
        15 => 'TC',
        16 => 'Vcc',
      ),
    ),
  ),
  74164 => 
  array (
    'description' => '8-bit serial-in/parallel-out shift register',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc164.74hct164.pdf',
    'pins' => 
    array (
      'DSA' => 
      array (
        'desc' => 'data input',
      ),
      'DSB' => 
      array (
        'desc' => 'data input',
      ),
      'Q0' => 
      array (
        'desc' => 'output',
      ),
      'Q1' => 
      array (
        'desc' => 'output',
      ),
      'Q2' => 
      array (
        'desc' => 'output',
      ),
      'Q3' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      '~MR' => 
      array (
        'desc' => 'master reset input (active low)',
      ),
      'Q4' => 
      array (
        'desc' => 'output',
      ),
      'Q5' => 
      array (
        'desc' => 'output',
      ),
      'Q6' => 
      array (
        'desc' => 'output',
      ),
      'Q7' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Qn',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Qn',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '78 (74HC)',
          1 => '61 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Either DSA or DSB can be used as an active high enable for data entry through the other input.',
      1 => 'Otherwise, Both inputs must be connected together or an unused input must be tied high.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'DSA',
        2 => 'DSB',
        3 => 'Q0',
        4 => 'Q1',
        5 => 'Q2',
        6 => 'Q3',
        7 => 'GND',
        8 => 'CP',
        9 => '~MR',
        10 => 'Q4',
        11 => 'Q5',
        12 => 'Q6',
        13 => 'Q7',
        14 => 'Vcc',
      ),
    ),
  ),
  74165 => 
  array (
    'description' => '8-bit parallel-in/serial-out shift register',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc165.74hct165.pdf',
    'pins' => 
    array (
      '~PL' => 
      array (
        'desc' => 'asynchronous parallel load input (active low)',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'D4' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D5' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D6' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D7' => 
      array (
        'desc' => 'parallel data input',
      ),
      '~Q~7' => 
      array (
        'desc' => 'complementary output from the last stage',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q7' => 
      array (
        'desc' => 'serial output from the last stage',
      ),
      'DS' => 
      array (
        'desc' => 'serial data input',
      ),
      'D0' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D3' => 
      array (
        'desc' => 'parallel data input',
      ),
      '~CE' => 
      array (
        'desc' => 'clock enable input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP, ~CE to Q7, ~Q~7',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~PL to Q7, ~Q~7',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, D7 to Q7, ~Q~7',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '56 (74HC)',
          1 => '48 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'The low-to-high transition of input ~CE should only take place while CP is high for predictable operation.',
      1 => 'Either CP or ~CE should be high before the low-to-high transition of ~PL to prevent shifting the data when ~PL is activated.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~PL',
        2 => 'CP',
        3 => 'D4',
        4 => 'D5',
        5 => 'D6',
        6 => 'D7',
        7 => '~Q~7',
        8 => 'GND',
        9 => 'Q7',
        10 => 'DS',
        11 => 'D0',
        12 => 'D1',
        13 => 'D2',
        14 => 'D3',
        15 => '~CE',
        16 => 'Vcc',
      ),
    ),
  ),
  74166 => 
  array (
    'description' => '8-bit parallel-in/serial-out shift register',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc166.74hct166.pdf',
    'pins' => 
    array (
      'D__s' => 
      array (
        'desc' => 'serial data input',
      ),
      'D__0' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__3' => 
      array (
        'desc' => 'parallel data input',
      ),
      '~CE' => 
      array (
        'desc' => 'clock enable input (active low)',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~MR' => 
      array (
        'desc' => 'asynchronous master reset (active low)',
      ),
      'D__4' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__5' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__6' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Q__7' => 
      array (
        'desc' => 'serial output from the last stage',
      ),
      'D__7' => 
      array (
        'desc' => 'parallel data input',
      ),
      '~PE' => 
      array (
        'desc' => 'parallel enable input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__7',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__7',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '63 (74HC)',
          1 => '50 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'The low-to-high transition of ~CE should only take place while CP is high for predictable operation.',
      1 => 'A low on ~MR overrides all other inputs and clears the register asynchronously, forcing all bit positions to a low stage.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D__s',
        2 => 'D__0',
        3 => 'D__1',
        4 => 'D__2',
        5 => 'D__3',
        6 => '~CE',
        7 => 'CP',
        8 => 'GND',
        9 => '~MR',
        10 => 'D__4',
        11 => 'D__5',
        12 => 'D__6',
        13 => 'Q__7',
        14 => 'D__7',
        15 => '~PE',
        16 => 'Vcc',
      ),
    ),
  ),
  74173 => 
  array (
    'description' => 'Quad D-type flip-flop; positive-edge trigger; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc173.74hct173.pdf',
    'pins' => 
    array (
      '~OE~__1' => 
      array (
        'desc' => 'output enable input (active low)',
      ),
      '~OE~__2' => 
      array (
        'desc' => 'output enable input (active low)',
      ),
      'Q__0' => 
      array (
        'desc' => '3-state flip-flop output',
      ),
      'Q__1' => 
      array (
        'desc' => '3-state flip-flop output',
      ),
      'Q__2' => 
      array (
        'desc' => '3-state flip-flop output',
      ),
      'Q__3' => 
      array (
        'desc' => '3-state flip-flop output',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~E~__1' => 
      array (
        'desc' => 'data enable input (active low)',
      ),
      '~E~__2' => 
      array (
        'desc' => 'data enable input (active low)',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'MR' => 
      array (
        'desc' => 'asynchronous master reset (active high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '17 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, MR to Q__n',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '88 (74HC/HCT)',
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'When one or both ~OE~__n inputs are high, the outputs are forced to a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE~__1',
        2 => '~OE~__2',
        3 => 'Q__0',
        4 => 'Q__1',
        5 => 'Q__2',
        6 => 'Q__3',
        7 => 'CP',
        8 => 'GND',
        9 => '~E~__1',
        10 => '~E~__2',
        11 => 'D__3',
        12 => 'D__2',
        13 => 'D__1',
        14 => 'D__0',
        15 => 'MR',
        16 => 'Vcc',
      ),
    ),
  ),
  74174 => 
  array (
    'description' => 'Hex D-type flip-flop with reset; positive-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc174.74hct174.pdf',
    'pins' => 
    array (
      '~MR' => 
      array (
        'desc' => 'asynchronous master reset (active low)',
      ),
      'Q__0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'Q__1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'Q__2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'Q__3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'Q__4' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D__4' => 
      array (
        'desc' => 'data input',
      ),
      'D__5' => 
      array (
        'desc' => 'data input',
      ),
      'Q__5' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '99 (74HC)',
          1 => '69 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MR',
        2 => 'Q__0',
        3 => 'D__0',
        4 => 'D__1',
        5 => 'Q__1',
        6 => 'D__2',
        7 => 'Q__2',
        8 => 'GND',
        9 => 'CP',
        10 => 'Q__3',
        11 => 'D__3',
        12 => 'Q__4',
        13 => 'D__4',
        14 => 'D__5',
        15 => 'Q__5',
        16 => 'Vcc',
      ),
    ),
  ),
  74175 => 
  array (
    'description' => 'Quad D-type flip-flop with reset; positive-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc175.74hct175.pdf',
    'pins' => 
    array (
      '~MR' => 
      array (
        'desc' => 'asynchronous master reset (active low)',
      ),
      'Q__0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__0' => 
      array (
        'desc' => 'complementary flip-flop output',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      '~Q~__1' => 
      array (
        'desc' => 'complementary flip-flop output',
      ),
      'Q__1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'Q__2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__2' => 
      array (
        'desc' => 'complementary flip-flop output',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      '~Q~__3' => 
      array (
        'desc' => 'complementary flip-flop output',
      ),
      'Q__3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n, ~Q~__n',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '83 (74HC)',
          1 => '54 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MR',
        2 => 'Q__0',
        3 => '~Q~__0',
        4 => 'D__0',
        5 => 'D__1',
        6 => '~Q~__1',
        7 => 'Q__1',
        8 => 'GND',
        9 => 'CP',
        10 => 'Q__2',
        11 => '~Q~__2',
        12 => 'D__2',
        13 => 'D__3',
        14 => '~Q~__3',
        15 => 'Q__3',
        16 => 'Vcc',
      ),
    ),
  ),
  74191 => 
  array (
    'description' => 'Presettable synchronous 4-bit binary up/down counter',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc191.74hct191.pdf',
    'pins' => 
    array (
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'Q__1' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__0' => 
      array (
        'desc' => 'counter output',
      ),
      '~CE' => 
      array (
        'desc' => 'count enable input (active low)',
      ),
      '~U~/D' => 
      array (
        'desc' => 'up/down input',
      ),
      'Q__2' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__3' => 
      array (
        'desc' => 'counter output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      '~PL' => 
      array (
        'desc' => 'parallel load input (active low)',
      ),
      'TC' => 
      array (
        'desc' => 'terminal count output',
      ),
      '~RC' => 
      array (
        'desc' => 'ripple clock output (active low)',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => '22 (74HC/74HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '36 (74HC/74HCT)',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D__1',
        2 => 'Q__1',
        3 => 'Q__0',
        4 => '~CE',
        5 => '~U~/D',
        6 => 'Q__2',
        7 => 'Q__3',
        8 => 'GND',
        9 => 'D__3',
        10 => 'D__2',
        11 => '~PL',
        12 => 'TC',
        13 => '~RC',
        14 => 'CP',
        15 => 'D__0',
        16 => 'Vcc',
      ),
    ),
  ),
  74193 => 
  array (
    'description' => 'Presettable synchronous 4-bit binary up/down counter; separate up/down clocks',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc193.74hct193.pdf',
    'pins' => 
    array (
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'Q__1' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__0' => 
      array (
        'desc' => 'counter output',
      ),
      'CPD' => 
      array (
        'desc' => 'count down clock input (low-to-high, edge-triggered)',
      ),
      'CPU' => 
      array (
        'desc' => 'count up clock input (low-to-high, edge-triggered)',
      ),
      'Q__2' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__3' => 
      array (
        'desc' => 'counter output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      '~PL' => 
      array (
        'desc' => 'parallel load input (active low)',
      ),
      '~TCU' => 
      array (
        'desc' => 'terminal count up (carry) output (active low)',
      ),
      '~TCD' => 
      array (
        'desc' => 'terminal count down (borrow) output (active low)',
      ),
      'MR' => 
      array (
        'desc' => 'asynchronous master reset (active high)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CPU, CPD to Q__n',
        'val' => 
        array (
          0 => '23 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CPU to ~TCU, ~TCD',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~PL to Q__n',
        'val' => 
        array (
          0 => '25 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, MR to Q__n',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '22 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, D__n to Q__n',
        'val' => 
        array (
          0 => '25 (74HC)',
          1 => '27 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Propagation delay, ~PL to ~TCU, ~TCD',
        'val' => 
        array (
          0 => '29 (74HC)',
          1 => '31 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      6 => 
      array (
        'param' => 'Propagation delay, MR to ~TCU, ~TCD',
        'val' => 
        array (
          0 => '27 (74HC)',
          1 => '29 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      7 => 
      array (
        'param' => 'Propagation delay, CPU, D__n to ~TCU, ~TCD',
        'val' => 
        array (
          0 => '29 (74HC)',
          1 => '32 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      8 => 
      array (
        'param' => 'Maximum frequency',
        'val' => 
        array (
          0 => '41 (74HC)',
          1 => '43 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D__1',
        2 => 'Q__1',
        3 => 'Q__0',
        4 => 'CPD',
        5 => 'CPU',
        6 => 'Q__2',
        7 => 'Q__3',
        8 => 'GND',
        9 => 'D__3',
        10 => 'D__2',
        11 => '~PL',
        12 => '~TCU',
        13 => '~TCD',
        14 => 'MR',
        15 => 'D__0',
        16 => 'Vcc',
      ),
    ),
  ),
  74194 => 
  array (
    'description' => '4-bit bidirectional universal shift register',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc194.74hct194.pdf',
    'pins' => 
    array (
      '~MR' => 
      array (
        'desc' => 'asynchronous master reset (active low)',
      ),
      'D__SR' => 
      array (
        'desc' => 'serial data input (shift right)',
      ),
      'D__0' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__3' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__SL' => 
      array (
        'desc' => 'serial data input (shift left)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'S__0' => 
      array (
        'desc' => 'mode control input',
      ),
      'S__1' => 
      array (
        'desc' => 'mode control input',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'Q__3' => 
      array (
        'desc' => 'parallel output',
      ),
      'Q__2' => 
      array (
        'desc' => 'parallel output',
      ),
      'Q__1' => 
      array (
        'desc' => 'parallel output',
      ),
      'Q__0' => 
      array (
        'desc' => 'parallel output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '102 (74HC)',
          1 => '77 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'S__0 and S__1 are low; hold (do nothing)',
      1 => 'S__0 low and S__1 high; shift left',
      2 => 'S__0 high and S__1 low; shift right',
      3 => 'S__0 and S__1 high; parallel load',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MR',
        2 => 'D__SR',
        3 => 'D__0',
        4 => 'D__1',
        5 => 'D__2',
        6 => 'D__3',
        7 => 'D__SL',
        8 => 'GND',
        9 => 'S__0',
        10 => 'S__1',
        11 => 'CP',
        12 => 'Q__3',
        13 => 'Q__2',
        14 => 'Q__1',
        15 => 'Q__0',
        16 => 'Vcc',
      ),
    ),
  ),
  74195 => 
  array (
    'description' => 'Universal 4-Bit Shift Register',
    'aliases' => 
    array (
    ),
    'family' => '7400',
    'datasheet' => 'http://pdf1.alldatasheet.com/datasheet-pdf/view/131233/NSC/74195.html',
    'pins' => 
    array (
      '~MR~' => 
      array (
        'desc' => 'Asynchronous Master Reset (Active Low)',
      ),
      'J' => 
      array (
        'desc' => 'First Stage J Input (Active High)',
      ),
      '~K~' => 
      array (
        'desc' => 'First Stage K Input (Active Low)',
      ),
      'P__0' => 
      array (
        'desc' => 'Parallel Data Input',
      ),
      'P__1' => 
      array (
        'desc' => 'Parallel Data Input',
      ),
      'P__2' => 
      array (
        'desc' => 'Parallel Data Input',
      ),
      'P__3' => 
      array (
        'desc' => 'Parallel Data Input',
      ),
      'GND' => 
      array (
        'desc' => 'Ground',
      ),
      '~PE~' => 
      array (
        'desc' => 'Parallel Enable Input (Active Low)',
      ),
      'CP' => 
      array (
        'desc' => 'Clock Pulse Input (Active Rising Edge)',
      ),
      '~Q~__3' => 
      array (
        'desc' => 'Complementary Last Stage Output (Active Low)',
      ),
      'Q__3' => 
      array (
        'desc' => 'Parallel Outputs',
      ),
      'Q__2' => 
      array (
        'desc' => 'Parallel Outputs',
      ),
      'Q__1' => 
      array (
        'desc' => 'Parallel Outputs',
      ),
      'Q__0' => 
      array (
        'desc' => 'Parallel Outputs',
      ),
      'VCC' => 
      array (
        'desc' => 'Power',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MR~',
        2 => 'J',
        3 => '~K~',
        4 => 'P__0',
        5 => 'P__1',
        6 => 'P__2',
        7 => 'P__3',
        8 => 'GND',
        9 => '~PE~',
        10 => 'CP',
        11 => '~Q~__3',
        12 => 'Q__3',
        13 => 'Q__2',
        14 => 'Q__1',
        15 => 'Q__0',
        16 => 'VCC',
      ),
    ),
  ),
  7420 => 
  array (
    'description' => 'Dual 4-input NAND gate',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc20.74hct20.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC, nD to nY',
        'val' => 
        array (
          0 => '8 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => 'NC',
        4 => '1C',
        5 => '1D',
        6 => '1Y',
        7 => 'GND',
        8 => '2Y',
        9 => '2A',
        10 => '2B',
        11 => 'NC',
        12 => '2C',
        13 => '2D',
        14 => 'Vcc',
      ),
    ),
  ),
  7421 => 
  array (
    'description' => 'Dual 4-input AND gate',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC21_3.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC, nD to nY',
        'val' => '10 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => 'NC',
        4 => '1C',
        5 => '1D',
        6 => '1Y',
        7 => 'GND',
        8 => '2Y',
        9 => '2A',
        10 => '2B',
        11 => 'NC',
        12 => '2C',
        13 => '2D',
        14 => 'Vcc',
      ),
    ),
  ),
  74221 => 
  array (
    'description' => 'Dual non-retriggerable monostable multivibrator with reset',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc221.74hct221.pdf',
    'pins' => 
    array (
      '1~A' => 
      array (
        'desc' => 'negative-edge triggered input 1',
      ),
      '1B' => 
      array (
        'desc' => 'positive-edge triggered input 1',
      ),
      '1~R~D' => 
      array (
        'desc' => 'direct reset (low) and positive-edge triggered input 1',
      ),
      '1~Q' => 
      array (
        'desc' => 'active low output 1',
      ),
      '2Q' => 
      array (
        'desc' => 'active high output 2',
      ),
      '2CEXT' => 
      array (
        'desc' => 'external capacitor connection 2',
      ),
      '2REXT/CEXT' => 
      array (
        'desc' => 'external resistor and capacitor connection 2',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~A' => 
      array (
        'desc' => 'negative-edge triggered input 2',
      ),
      '2B' => 
      array (
        'desc' => 'positive-edge triggered input 2',
      ),
      '2~R~D' => 
      array (
        'desc' => 'direct reset (low) and positive-edge triggered input 2',
      ),
      '2~Q' => 
      array (
        'desc' => 'active low output 2',
      ),
      '1Q' => 
      array (
        'desc' => 'active high output 1',
      ),
      '1CEXT' => 
      array (
        'desc' => 'external capacitor connection 1',
      ),
      '1REXT/CEXT' => 
      array (
        'desc' => 'external resistor and capacitor connection 1',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~R~D, n~A, nB to nQ or n~Q',
        'val' => 
        array (
          0 => '29 (74HC)',
          1 => '32 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Output transition time',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '7 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'External timing resistor',
        'val' => 
        array (
          0 => '2 (min)',
          1 => '1000 (max)',
        ),
        'unit' => 'kΩ',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~A',
        2 => '1B',
        3 => '1~R~D',
        4 => '1~Q',
        5 => '2Q',
        6 => '2CEXT',
        7 => '2REXT/CEXT',
        8 => 'GND',
        9 => '2~A',
        10 => '2B',
        11 => '2~R~D',
        12 => '2~Q',
        13 => '1Q',
        14 => '1CEXT',
        15 => '1REXT/CEXT',
        16 => 'Vcc',
      ),
    ),
  ),
  74237 => 
  array (
    'description' => '3-to-8 line decoder/demultiplexer with address latches; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc237.pdf',
    'pins' => 
    array (
      'A0' => 
      array (
        'desc' => 'data input 0',
      ),
      'A1' => 
      array (
        'desc' => 'data input 1',
      ),
      'A2' => 
      array (
        'desc' => 'data input 2',
      ),
      '~LE' => 
      array (
        'desc' => 'latch enable input (active low)',
      ),
      '~E~1' => 
      array (
        'desc' => 'data enable input 1 (active low)',
      ),
      'E2' => 
      array (
        'desc' => 'data enable input 2 (active high)',
      ),
      'Y7' => 
      array (
        'desc' => 'output 7',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Y6' => 
      array (
        'desc' => 'output 6',
      ),
      'Y5' => 
      array (
        'desc' => 'output 5',
      ),
      'Y4' => 
      array (
        'desc' => 'output 4',
      ),
      'Y3' => 
      array (
        'desc' => 'output 3',
      ),
      'Y2' => 
      array (
        'desc' => 'output 2',
      ),
      'Y1' => 
      array (
        'desc' => 'output 1',
      ),
      'Y0' => 
      array (
        'desc' => 'output 0',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to Yn',
        'val' => '16 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~LE to Yn',
        'val' => '19 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E~1 to Yn',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, E2 to Yn',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A0',
        2 => 'A1',
        3 => 'A2',
        4 => '~LE',
        5 => '~E~1',
        6 => 'E2',
        7 => 'Y7',
        8 => 'GND',
        9 => 'Y6',
        10 => 'Y5',
        11 => 'Y4',
        12 => 'Y3',
        13 => 'Y2',
        14 => 'Y1',
        15 => 'Y0',
        16 => 'Vcc',
      ),
    ),
  ),
  74238 => 
  array (
    'description' => '3-to-8 line decoder/demultiplexer; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc238.74hct238.pdf',
    'pins' => 
    array (
      'A0' => 
      array (
        'desc' => 'data input 0',
      ),
      'A1' => 
      array (
        'desc' => 'data input 1',
      ),
      'A2' => 
      array (
        'desc' => 'data input 2',
      ),
      '~E~1' => 
      array (
        'desc' => 'enable input 1 (active low)',
      ),
      '~E~2' => 
      array (
        'desc' => 'enable input 2 (active low)',
      ),
      'E3' => 
      array (
        'desc' => 'enable input 3 (active high)',
      ),
      'Y7' => 
      array (
        'desc' => 'output 7',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Y6' => 
      array (
        'desc' => 'output 6',
      ),
      'Y5' => 
      array (
        'desc' => 'output 5',
      ),
      'Y4' => 
      array (
        'desc' => 'output 4',
      ),
      'Y3' => 
      array (
        'desc' => 'output 3',
      ),
      'Y2' => 
      array (
        'desc' => 'output 2',
      ),
      'Y1' => 
      array (
        'desc' => 'output 1',
      ),
      'Y0' => 
      array (
        'desc' => 'output 0',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to Yn',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, E3 to Yn',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E~n to Yn',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '21 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A0',
        2 => 'A1',
        3 => 'A2',
        4 => '~E~1',
        5 => '~E~2',
        6 => 'E3',
        7 => 'Y7',
        8 => 'GND',
        9 => 'Y6',
        10 => 'Y5',
        11 => 'Y4',
        12 => 'Y3',
        13 => 'Y2',
        14 => 'Y1',
        15 => 'Y0',
        16 => 'Vcc',
      ),
    ),
  ),
  74240 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc240.74hct240.pdf',
    'pins' => 
    array (
      '1~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1A0' => 
      array (
        'desc' => 'data input',
      ),
      '2Y0' => 
      array (
        'desc' => 'bus output',
      ),
      '1A1' => 
      array (
        'desc' => 'data input',
      ),
      '2Y1' => 
      array (
        'desc' => 'bus output',
      ),
      '1A2' => 
      array (
        'desc' => 'data input',
      ),
      '2Y2' => 
      array (
        'desc' => 'bus output',
      ),
      '1A3' => 
      array (
        'desc' => 'data input',
      ),
      '2Y3' => 
      array (
        'desc' => 'bus output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2A3' => 
      array (
        'desc' => 'data input',
      ),
      '1Y3' => 
      array (
        'desc' => 'bus output',
      ),
      '2A2' => 
      array (
        'desc' => 'data input',
      ),
      '1Y2' => 
      array (
        'desc' => 'bus output',
      ),
      '2A1' => 
      array (
        'desc' => 'data input',
      ),
      '1Y1' => 
      array (
        'desc' => 'bus output',
      ),
      '2A0' => 
      array (
        'desc' => 'data input',
      ),
      '1Y0' => 
      array (
        'desc' => 'bus output',
      ),
      '2~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nAn to nYn',
        'val' => 
        array (
          0 => '9 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting 1~OE or 2~OE high causes the outputs to assume a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~OE',
        2 => '1A0',
        3 => '2Y0',
        4 => '1A1',
        5 => '2Y1',
        6 => '1A2',
        7 => '2Y2',
        8 => '1A3',
        9 => '2Y3',
        10 => 'GND',
        11 => '2A3',
        12 => '1Y3',
        13 => '2A2',
        14 => '1Y2',
        15 => '2A1',
        16 => '1Y1',
        17 => '2A0',
        18 => '1Y0',
        19 => '2~OE',
        20 => 'Vcc',
      ),
    ),
  ),
  74241 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc241.74hct241.pdf',
    'pins' => 
    array (
      '1~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1A0' => 
      array (
        'desc' => 'data input',
      ),
      '2Y0' => 
      array (
        'desc' => 'bus output',
      ),
      '1A1' => 
      array (
        'desc' => 'data input',
      ),
      '2Y1' => 
      array (
        'desc' => 'bus output',
      ),
      '1A2' => 
      array (
        'desc' => 'data input',
      ),
      '2Y2' => 
      array (
        'desc' => 'bus output',
      ),
      '1A3' => 
      array (
        'desc' => 'data input',
      ),
      '2Y3' => 
      array (
        'desc' => 'bus output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2A3' => 
      array (
        'desc' => 'data input',
      ),
      '1Y3' => 
      array (
        'desc' => 'bus output',
      ),
      '2A2' => 
      array (
        'desc' => 'data input',
      ),
      '1Y2' => 
      array (
        'desc' => 'bus output',
      ),
      '2A1' => 
      array (
        'desc' => 'data input',
      ),
      '1Y1' => 
      array (
        'desc' => 'bus output',
      ),
      '2A0' => 
      array (
        'desc' => 'data input',
      ),
      '1Y0' => 
      array (
        'desc' => 'bus output',
      ),
      '2OE' => 
      array (
        'desc' => 'output enable (active high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nAn to nYn',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting 1~OE high or 2OE low causes the outputs to assume a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~OE',
        2 => '1A0',
        3 => '2Y0',
        4 => '1A1',
        5 => '2Y1',
        6 => '1A2',
        7 => '2Y2',
        8 => '1A3',
        9 => '2Y3',
        10 => 'GND',
        11 => '2A3',
        12 => '1Y3',
        13 => '2A2',
        14 => '1Y2',
        15 => '2A1',
        16 => '1Y1',
        17 => '2A0',
        18 => '1Y0',
        19 => '2OE',
        20 => 'Vcc',
      ),
    ),
  ),
  74243 => 
  array (
    'description' => 'Quad bus transceiver; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc243.pdf',
    'pins' => 
    array (
      '~OE~A' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'A0' => 
      array (
        'desc' => 'data input or output',
      ),
      'A1' => 
      array (
        'desc' => 'data input or output',
      ),
      'A2' => 
      array (
        'desc' => 'data input or output',
      ),
      'A3' => 
      array (
        'desc' => 'data input or output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'B3' => 
      array (
        'desc' => 'data output or input',
      ),
      'B2' => 
      array (
        'desc' => 'data output or input',
      ),
      'B1' => 
      array (
        'desc' => 'data output or input',
      ),
      'B0' => 
      array (
        'desc' => 'data output or input',
      ),
      'OEB' => 
      array (
        'desc' => 'output enable (active high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to Bn; Bn to An',
        'val' => '6 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When ~OE~A and OEB are low, An are inputs.',
      1 => 'When ~OE~A and OEB are high, Bn are inputs.',
      2 => 'Otherwise, An and Bn are in a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE~A',
        2 => 'NC',
        3 => 'A0',
        4 => 'A1',
        5 => 'A2',
        6 => 'A3',
        7 => 'GND',
        8 => 'B3',
        9 => 'B2',
        10 => 'B1',
        11 => 'B0',
        12 => 'NC',
        13 => 'OEB',
        14 => 'Vcc',
      ),
    ),
  ),
  74244 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc244.74hct244.pdf',
    'pins' => 
    array (
      '1~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1A0' => 
      array (
        'desc' => 'data input',
      ),
      '2Y0' => 
      array (
        'desc' => 'bus output',
      ),
      '1A1' => 
      array (
        'desc' => 'data input',
      ),
      '2Y1' => 
      array (
        'desc' => 'bus output',
      ),
      '1A2' => 
      array (
        'desc' => 'data input',
      ),
      '2Y2' => 
      array (
        'desc' => 'bus output',
      ),
      '1A3' => 
      array (
        'desc' => 'data input',
      ),
      '2Y3' => 
      array (
        'desc' => 'bus output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2A3' => 
      array (
        'desc' => 'data input',
      ),
      '1Y3' => 
      array (
        'desc' => 'bus output',
      ),
      '2A2' => 
      array (
        'desc' => 'data input',
      ),
      '1Y2' => 
      array (
        'desc' => 'bus output',
      ),
      '2A1' => 
      array (
        'desc' => 'data input',
      ),
      '1Y1' => 
      array (
        'desc' => 'bus output',
      ),
      '2A0' => 
      array (
        'desc' => 'data input',
      ),
      '1Y0' => 
      array (
        'desc' => 'bus output',
      ),
      '2~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nAn to nYn',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting 1~OE or 2~OE high causes the outputs to assume a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~OE',
        2 => '1A0',
        3 => '2Y0',
        4 => '1A1',
        5 => '2Y1',
        6 => '1A2',
        7 => '2Y2',
        8 => '1A3',
        9 => '2Y3',
        10 => 'GND',
        11 => '2A3',
        12 => '1Y3',
        13 => '2A2',
        14 => '1Y2',
        15 => '2A1',
        16 => '1Y1',
        17 => '2A0',
        18 => '1Y0',
        19 => '2~OE',
        20 => 'Vcc',
      ),
    ),
  ),
  74245 => 
  array (
    'description' => 'Octal bus transceiver; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc245.74hct245.pdf',
    'pins' => 
    array (
      'DIR' => 
      array (
        'desc' => 'direction control',
      ),
      'A0' => 
      array (
        'desc' => 'data input/output',
      ),
      'A1' => 
      array (
        'desc' => 'data input/output',
      ),
      'A2' => 
      array (
        'desc' => 'data input/output',
      ),
      'A3' => 
      array (
        'desc' => 'data input/output',
      ),
      'A4' => 
      array (
        'desc' => 'data input/output',
      ),
      'A5' => 
      array (
        'desc' => 'data input/output',
      ),
      'A6' => 
      array (
        'desc' => 'data input/output',
      ),
      'A7' => 
      array (
        'desc' => 'data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'B7' => 
      array (
        'desc' => 'data input/output',
      ),
      'B6' => 
      array (
        'desc' => 'data input/output',
      ),
      'B5' => 
      array (
        'desc' => 'data input/output',
      ),
      'B4' => 
      array (
        'desc' => 'data input/output',
      ),
      'B3' => 
      array (
        'desc' => 'data input/output',
      ),
      'B2' => 
      array (
        'desc' => 'data input/output',
      ),
      'B1' => 
      array (
        'desc' => 'data input/output',
      ),
      'B0' => 
      array (
        'desc' => 'data input/output',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to Bn or Bn to An',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '10 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When DIR is high, An are inputs.',
      1 => 'When DIR is low, Bn are inputs.',
      2 => 'When ~OE is high, An and Bn are in a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'DIR',
        2 => 'A0',
        3 => 'A1',
        4 => 'A2',
        5 => 'A3',
        6 => 'A4',
        7 => 'A5',
        8 => 'A6',
        9 => 'A7',
        10 => 'GND',
        11 => 'B7',
        12 => 'B6',
        13 => 'B5',
        14 => 'B4',
        15 => 'B3',
        16 => 'B2',
        17 => 'B1',
        18 => 'B0',
        19 => '~OE',
        20 => 'Vcc',
      ),
    ),
  ),
  74251 => 
  array (
    'description' => '8-input multiplexer; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc251.74hct251.pdf',
    'pins' => 
    array (
      'I__3' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__2' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__1' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__0' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '~Y' => 
      array (
        'desc' => 'complementary multiplexer output',
      ),
      '~OE' => 
      array (
        'desc' => 'enable input (active low; outputs in high-impedance off state when high)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'S__2' => 
      array (
        'desc' => 'select input',
      ),
      'S__1' => 
      array (
        'desc' => 'select input',
      ),
      'S__0' => 
      array (
        'desc' => 'select input',
      ),
      'I__7' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__6' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__5' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'I__4' => 
      array (
        'desc' => 'multiplexer input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, I__n to Y',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, I__n to ~Y',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, S__n to Y',
        'val' => '20 (74HC/HCT)',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, S__n to ~Y',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '21 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'I__3',
        2 => 'I__2',
        3 => 'I__1',
        4 => 'I__0',
        5 => 'Y',
        6 => '~Y',
        7 => '~OE',
        8 => 'GND',
        9 => 'S__2',
        10 => 'S__1',
        11 => 'S__0',
        12 => 'I__7',
        13 => 'I__6',
        14 => 'I__5',
        15 => 'I__4',
        16 => 'Vcc',
      ),
    ),
  ),
  74253 => 
  array (
    'description' => 'Dual 4-input multiplexer; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc253.74hct253.pdf',
    'pins' => 
    array (
      '1~OE' => 
      array (
        'desc' => 'enable input 1 (active low)',
      ),
      'S__1' => 
      array (
        'desc' => 'common data select input',
      ),
      '1I__3' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1I__2' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1I__0' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1Y' => 
      array (
        'desc' => 'multiplexer output from source 1',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2Y' => 
      array (
        'desc' => 'multiplexer output from source 2',
      ),
      '2I__0' => 
      array (
        'desc' => 'data input from source 2',
      ),
      '2I__1' => 
      array (
        'desc' => 'data input from source 2',
      ),
      '2I__2' => 
      array (
        'desc' => 'data input from source 2',
      ),
      '2I__3' => 
      array (
        'desc' => 'data input from source 2',
      ),
      'S__0' => 
      array (
        'desc' => 'common data select input',
      ),
      '2~OE' => 
      array (
        'desc' => 'enable input 2 (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, 1I__n, 2I__n to nY',
        'val' => 
        array (
          0 => '17 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S__n to nY',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When 1~OE or 2~OE is high, the outputs are forced to a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~OE',
        2 => 'S__1',
        3 => '1I__3',
        4 => '1I__2',
        5 => '1I__1',
        6 => '1I__0',
        7 => '1Y',
        8 => 'GND',
        9 => '2Y',
        10 => '2I__0',
        11 => '2I__1',
        12 => '2I__2',
        13 => '2I__3',
        14 => 'S__0',
        15 => '2~OE',
        16 => 'Vcc',
      ),
    ),
  ),
  74257 => 
  array (
    'description' => 'Quad 2-input multiplexer; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc257.74hct257.pdf',
    'pins' => 
    array (
      'S' => 
      array (
        'desc' => 'common data select input',
      ),
      '1I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '1I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '2I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '2I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '2Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '3I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '3I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '4Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '4I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '4I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '~OE' => 
      array (
        'desc' => 'enable input (active low; outputs in high-impedance off state when high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nI__0, nI__1 to nY',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S to nY',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'S',
        2 => '1I__0',
        3 => '1I__1',
        4 => '1Y',
        5 => '2I__0',
        6 => '2I__1',
        7 => '2Y',
        8 => 'GND',
        9 => '3Y',
        10 => '3I__1',
        11 => '3I__0',
        12 => '4Y',
        13 => '4I__1',
        14 => '4I__0',
        15 => '~OE',
        16 => 'Vcc',
      ),
    ),
  ),
  74258 => 
  array (
    'description' => 'Quad 2-input multiplexer; 3-state; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc258.pdf',
    'pins' => 
    array (
      'S' => 
      array (
        'desc' => 'common data select input',
      ),
      '1I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '1I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '1~Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '2I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '2I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '2~Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3~Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '3I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '3I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '4~Y' => 
      array (
        'desc' => 'multiplexer output',
      ),
      '4I__1' => 
      array (
        'desc' => 'data input from source 1',
      ),
      '4I__0' => 
      array (
        'desc' => 'data input from source 0',
      ),
      '~OE' => 
      array (
        'desc' => 'enable input (active low; outputs in high-impedance off state when high)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nI__0, nI__1 to n~Y',
        'val' => '9 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S to n~Y',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'S',
        2 => '1I__0',
        3 => '1I__1',
        4 => '1~Y',
        5 => '2I__0',
        6 => '2I__1',
        7 => '2~Y',
        8 => 'GND',
        9 => '3~Y',
        10 => '3I__1',
        11 => '3I__0',
        12 => '4~Y',
        13 => '4I__1',
        14 => '4I__0',
        15 => '~OE',
        16 => 'Vcc',
      ),
    ),
  ),
  74259 => 
  array (
    'description' => '8-bit addressable latch',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc259.74hct259.pdf',
    'pins' => 
    array (
      'A0' => 
      array (
        'desc' => 'address input',
      ),
      'A1' => 
      array (
        'desc' => 'address input',
      ),
      'A2' => 
      array (
        'desc' => 'address input',
      ),
      'Q0' => 
      array (
        'desc' => 'latch output',
      ),
      'Q1' => 
      array (
        'desc' => 'latch output',
      ),
      'Q2' => 
      array (
        'desc' => 'latch output',
      ),
      'Q3' => 
      array (
        'desc' => 'latch output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q4' => 
      array (
        'desc' => 'latch output',
      ),
      'Q5' => 
      array (
        'desc' => 'latch output',
      ),
      'Q6' => 
      array (
        'desc' => 'latch output',
      ),
      'Q7' => 
      array (
        'desc' => 'latch output',
      ),
      'D' => 
      array (
        'desc' => 'data input',
      ),
      '~LE' => 
      array (
        'desc' => 'latch enable input (active low)',
      ),
      '~MR' => 
      array (
        'desc' => 'conditional reset input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, D to Qn',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, An to Qn',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~LE to Qn',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A0',
        2 => 'A1',
        3 => 'A2',
        4 => 'Q0',
        5 => 'Q1',
        6 => 'Q2',
        7 => 'Q3',
        8 => 'GND',
        9 => 'Q4',
        10 => 'Q5',
        11 => 'Q6',
        12 => 'Q7',
        13 => 'D',
        14 => '~LE',
        15 => '~MR',
        16 => 'Vcc',
      ),
    ),
  ),
  7427 => 
  array (
    'description' => 'Triple 3-input NOR gate',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT27_3.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '3C' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC to nY',
        'val' => 
        array (
          0 => '8 (74HC)',
          1 => '10 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '2A',
        4 => '2B',
        5 => '2C',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3B',
        11 => '3C',
        12 => '1Y',
        13 => '1C',
        14 => 'Vcc',
      ),
    ),
  ),
  74273 => 
  array (
    'description' => 'Octal D-type flip-flop with reset; positive-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc273.74hct273.pdf',
    'pins' => 
    array (
      '~MR' => 
      array (
        'desc' => 'master reset input (active low)',
      ),
      'Q0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D0' => 
      array (
        'desc' => 'data input',
      ),
      'D1' => 
      array (
        'desc' => 'data input',
      ),
      'Q1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D2' => 
      array (
        'desc' => 'data input',
      ),
      'D3' => 
      array (
        'desc' => 'data input',
      ),
      'Q3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'Q4' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D4' => 
      array (
        'desc' => 'data input',
      ),
      'D5' => 
      array (
        'desc' => 'data input',
      ),
      'Q5' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q6' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D6' => 
      array (
        'desc' => 'data input',
      ),
      'D7' => 
      array (
        'desc' => 'data input',
      ),
      'Q7' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Qn',
        'val' => '15 (74HC/HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '66 (74HC)',
          1 => '36 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MR',
        2 => 'Q0',
        3 => 'D0',
        4 => 'D1',
        5 => 'Q1',
        6 => 'Q2',
        7 => 'D2',
        8 => 'D3',
        9 => 'Q3',
        10 => 'GND',
        11 => 'CP',
        12 => 'Q4',
        13 => 'D4',
        14 => 'D5',
        15 => 'Q5',
        16 => 'Q6',
        17 => 'D6',
        18 => 'D7',
        19 => 'Q7',
        20 => 'Vcc',
      ),
    ),
  ),
  74280 => 
  array (
    'description' => '9-bit odd/even parity generator/checker',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc280.74hct280.pdf',
    'pins' => 
    array (
      'I__6' => 
      array (
        'desc' => 'data input',
      ),
      'I__7' => 
      array (
        'desc' => 'data input',
      ),
      'I__8' => 
      array (
        'desc' => 'data input',
      ),
      'Σ__E' => 
      array (
        'desc' => 'even parity output',
      ),
      'Σ__O' => 
      array (
        'desc' => 'odd parity output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'I__0' => 
      array (
        'desc' => 'data input',
      ),
      'I__1' => 
      array (
        'desc' => 'data input',
      ),
      'I__2' => 
      array (
        'desc' => 'data input',
      ),
      'I__3' => 
      array (
        'desc' => 'data input',
      ),
      'I__4' => 
      array (
        'desc' => 'data input',
      ),
      'I__5' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, I__n to Σ__E',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, I__n to Σ__O',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '22 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'I__6',
        2 => 'I__7',
        3 => 'NC',
        4 => 'I__8',
        5 => 'Σ__E',
        6 => 'Σ__O',
        7 => 'GND',
        8 => 'I__0',
        9 => 'I__1',
        10 => 'I__2',
        11 => 'I__3',
        12 => 'I__4',
        13 => 'I__5',
        14 => 'Vcc',
      ),
    ),
  ),
  74283 => 
  array (
    'description' => '4-bit binary full adder with fast carry',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc283.pdf',
    'pins' => 
    array (
      'S2' => 
      array (
        'desc' => 'sum output',
      ),
      'B2' => 
      array (
        'desc' => 'B operand input',
      ),
      'A2' => 
      array (
        'desc' => 'A operand input',
      ),
      'S1' => 
      array (
        'desc' => 'sum output',
      ),
      'A1' => 
      array (
        'desc' => 'A operand input',
      ),
      'B1' => 
      array (
        'desc' => 'B operand input',
      ),
      'CIN' => 
      array (
        'desc' => 'carry input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'COUT' => 
      array (
        'desc' => 'carry output',
      ),
      'S4' => 
      array (
        'desc' => 'sum output',
      ),
      'B4' => 
      array (
        'desc' => 'B operand input',
      ),
      'A4' => 
      array (
        'desc' => 'A operand input',
      ),
      'S3' => 
      array (
        'desc' => 'sum output',
      ),
      'A3' => 
      array (
        'desc' => 'A operand input',
      ),
      'B3' => 
      array (
        'desc' => 'B operand input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CIN to S1',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CIN to S2',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '21 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, CIN to S3',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, CIN to S4',
        'val' => 
        array (
          0 => '23 (74HC)',
          1 => '27 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, An, Bn to Sn',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '25 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Propagation delay, CIN to COUT',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      6 => 
      array (
        'param' => 'Propagation delay, An, Bn to COUT',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '24 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'S2',
        2 => 'B2',
        3 => 'A2',
        4 => 'S1',
        5 => 'A1',
        6 => 'B1',
        7 => 'CIN',
        8 => 'GND',
        9 => 'COUT',
        10 => 'S4',
        11 => 'B4',
        12 => 'A4',
        13 => 'S3',
        14 => 'A3',
        15 => 'B3',
        16 => 'Vcc',
      ),
    ),
  ),
  74299 => 
  array (
    'description' => '8-bit universal shift register; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc299.74hct299.pdf',
    'pins' => 
    array (
      'S0' => 
      array (
        'desc' => 'mode select input',
      ),
      '~OE~1' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '~OE~2' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'I/O6' => 
      array (
        'desc' => 'parallel data input/output',
      ),
      'I/O4' => 
      array (
        'desc' => 'parallel data input/output',
      ),
      'I/O2' => 
      array (
        'desc' => 'parallel data input/output',
      ),
      'I/O0' => 
      array (
        'desc' => 'parallel data input/output',
      ),
      'Q0' => 
      array (
        'desc' => 'serial output (standard output)',
      ),
      '~MR' => 
      array (
        'desc' => 'asynchronous master reset (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'DSR' => 
      array (
        'desc' => 'serial data shift-right input',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'I/O1' => 
      array (
        'desc' => 'parallel data input/output',
      ),
      'I/O3' => 
      array (
        'desc' => 'parallel data input/output',
      ),
      'I/O5' => 
      array (
        'desc' => 'parallel data input/output',
      ),
      'I/O7' => 
      array (
        'desc' => 'parallel data input/output',
      ),
      'Q7' => 
      array (
        'desc' => 'serial output (standard output)',
      ),
      'DSL' => 
      array (
        'desc' => 'serial data shift-left input',
      ),
      'S1' => 
      array (
        'desc' => 'mode select input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q0, Q7',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP to I/On',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~MR to Q0, Q7, I/On',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '50 (74HC)',
          1 => '46 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'S1 and S0 are low; hold (do nothing)',
      1 => 'S1 is high and S0 is low; shift left (DSL → Q7, Q7 → Q6...)',
      2 => 'S1 is low and S0 is high; shift right (DSR → Q0, Q0 → Q1...)',
      3 => 'S1 and S0 are high; parallel load (I/On → Qn)',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'S0',
        2 => '~OE~1',
        3 => '~OE~2',
        4 => 'I/O6',
        5 => 'I/O4',
        6 => 'I/O2',
        7 => 'I/O0',
        8 => 'Q0',
        9 => '~MR',
        10 => 'GND',
        11 => 'DSR',
        12 => 'CP',
        13 => 'I/O1',
        14 => 'I/O3',
        15 => 'I/O5',
        16 => 'I/O7',
        17 => 'Q7',
        18 => 'DSL',
        19 => 'S1',
        20 => 'Vcc',
      ),
    ),
  ),
  7430 => 
  array (
    'description' => '8-input NAND gate',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc30.74hct30.pdf',
    'pins' => 
    array (
      'A' => 
      array (
        'desc' => 'data input',
      ),
      'B' => 
      array (
        'desc' => 'data input',
      ),
      'C' => 
      array (
        'desc' => 'data input',
      ),
      'D' => 
      array (
        'desc' => 'data input',
      ),
      'E' => 
      array (
        'desc' => 'data input',
      ),
      'F' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Y' => 
      array (
        'desc' => 'data output',
      ),
      'G' => 
      array (
        'desc' => 'data input',
      ),
      'H' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A, B, C, D, E, F, G, H, to Y',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A',
        2 => 'B',
        3 => 'C',
        4 => 'D',
        5 => 'E',
        6 => 'F',
        7 => 'GND',
        8 => 'Y',
        9 => 'NC',
        10 => 'NC',
        11 => 'G',
        12 => 'H',
        13 => 'NC',
        14 => 'Vcc',
      ),
    ),
  ),
  7432 => 
  array (
    'description' => 'Quad 2-input OR gate',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc32.74hct32.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '6 (74HC)',
          1 => '9 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2A',
        5 => '2B',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3B',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  74365 => 
  array (
    'description' => 'Hex buffer/line driver; 3-state; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc365.74hct365.pdf',
    'pins' => 
    array (
      '~OE~__1' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'bus output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'bus output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'bus output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4Y' => 
      array (
        'desc' => 'bus output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'bus output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'bus output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      '~OE~__2' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting ~OE~__1 or ~OE~__2 high causes the outputs to assume a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE~__1',
        2 => '1A',
        3 => '1Y',
        4 => '2A',
        5 => '2Y',
        6 => '3A',
        7 => '3Y',
        8 => 'GND',
        9 => '4Y',
        10 => '4A',
        11 => '5Y',
        12 => '5A',
        13 => '6Y',
        14 => '6A',
        15 => '~OE~__2',
        16 => 'Vcc',
      ),
    ),
  ),
  74366 => 
  array (
    'description' => 'Hex buffer/line driver; 3-state; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc366.74hct366.pdf',
    'pins' => 
    array (
      '~OE~__1' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'bus output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'bus output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'bus output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4Y' => 
      array (
        'desc' => 'bus output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'bus output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'bus output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      '~OE~__2' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting ~OE~__1 or ~OE~__2 high causes the outputs to assume a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE~__1',
        2 => '1A',
        3 => '1Y',
        4 => '2A',
        5 => '2Y',
        6 => '3A',
        7 => '3Y',
        8 => 'GND',
        9 => '4Y',
        10 => '4A',
        11 => '5Y',
        12 => '5A',
        13 => '6Y',
        14 => '6A',
        15 => '~OE~__2',
        16 => 'Vcc',
      ),
    ),
  ),
  74367 => 
  array (
    'description' => 'Hex buffer/line driver; 3-state; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc367.74hct367.pdf',
    'pins' => 
    array (
      '~OE~__1' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'bus output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'bus output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'bus output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4Y' => 
      array (
        'desc' => 'bus output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'bus output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'bus output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      '~OE~__2' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '8 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting ~OE~__1 or ~OE~__2 high causes the outputs to assume a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE~__1',
        2 => '1A',
        3 => '1Y',
        4 => '2A',
        5 => '2Y',
        6 => '3A',
        7 => '3Y',
        8 => 'GND',
        9 => '4Y',
        10 => '4A',
        11 => '5Y',
        12 => '5A',
        13 => '6Y',
        14 => '6A',
        15 => '~OE~__2',
        16 => 'Vcc',
      ),
    ),
  ),
  74368 => 
  array (
    'description' => 'Hex buffer/line driver; 3-state; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc368.74hct368.pdf',
    'pins' => 
    array (
      '~OE~__1' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'bus output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'bus output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3Y' => 
      array (
        'desc' => 'bus output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '4Y' => 
      array (
        'desc' => 'bus output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '5Y' => 
      array (
        'desc' => 'bus output',
      ),
      '5A' => 
      array (
        'desc' => 'data input',
      ),
      '6Y' => 
      array (
        'desc' => 'bus output',
      ),
      '6A' => 
      array (
        'desc' => 'data input',
      ),
      '~OE~__2' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting ~OE~__1 or ~OE~__2 high causes the outputs to assume a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE~__1',
        2 => '1A',
        3 => '1Y',
        4 => '2A',
        5 => '2Y',
        6 => '3A',
        7 => '3Y',
        8 => 'GND',
        9 => '4Y',
        10 => '4A',
        11 => '5Y',
        12 => '5A',
        13 => '6Y',
        14 => '6A',
        15 => '~OE~__2',
        16 => 'Vcc',
      ),
    ),
  ),
  74373 => 
  array (
    'description' => 'Octal D-type transparent latch; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc373.74hct373.pdf',
    'pins' => 
    array (
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Q0' => 
      array (
        'desc' => 'latch output',
      ),
      'D0' => 
      array (
        'desc' => 'data input',
      ),
      'D1' => 
      array (
        'desc' => 'data input',
      ),
      'Q1' => 
      array (
        'desc' => 'latch output',
      ),
      'Q2' => 
      array (
        'desc' => 'latch output',
      ),
      'D2' => 
      array (
        'desc' => 'data input',
      ),
      'D3' => 
      array (
        'desc' => 'data input',
      ),
      'Q3' => 
      array (
        'desc' => 'latch output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'LE' => 
      array (
        'desc' => 'latch enable (active high)',
      ),
      'Q4' => 
      array (
        'desc' => 'latch output',
      ),
      'D4' => 
      array (
        'desc' => 'data input',
      ),
      'D5' => 
      array (
        'desc' => 'data input',
      ),
      'Q5' => 
      array (
        'desc' => 'latch output',
      ),
      'Q6' => 
      array (
        'desc' => 'latch output',
      ),
      'D6' => 
      array (
        'desc' => 'data input',
      ),
      'D7' => 
      array (
        'desc' => 'data input',
      ),
      'Q7' => 
      array (
        'desc' => 'latch output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, Dn to Qn',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, LE to Qn',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE',
        2 => 'Q0',
        3 => 'D0',
        4 => 'D1',
        5 => 'Q1',
        6 => 'Q2',
        7 => 'D2',
        8 => 'D3',
        9 => 'Q3',
        10 => 'GND',
        11 => 'LE',
        12 => 'Q4',
        13 => 'D4',
        14 => 'D5',
        15 => 'Q5',
        16 => 'Q6',
        17 => 'D6',
        18 => 'D7',
        19 => 'Q7',
        20 => 'Vcc',
      ),
    ),
  ),
  74374 => 
  array (
    'description' => 'Octal D-type flip-flop; positive-edge trigger; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc374.74hct374.pdf',
    'pins' => 
    array (
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Q0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D0' => 
      array (
        'desc' => 'data input',
      ),
      'D1' => 
      array (
        'desc' => 'data input',
      ),
      'Q1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D2' => 
      array (
        'desc' => 'data input',
      ),
      'D3' => 
      array (
        'desc' => 'data input',
      ),
      'Q3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'Q4' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D4' => 
      array (
        'desc' => 'data input',
      ),
      'D5' => 
      array (
        'desc' => 'data input',
      ),
      'Q5' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q6' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D6' => 
      array (
        'desc' => 'data input',
      ),
      'D7' => 
      array (
        'desc' => 'data input',
      ),
      'Q7' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Qn',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '77 (74HC)',
          1 => '48 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE',
        2 => 'Q0',
        3 => 'D0',
        4 => 'D1',
        5 => 'Q1',
        6 => 'Q2',
        7 => 'D2',
        8 => 'D3',
        9 => 'Q3',
        10 => 'GND',
        11 => 'CP',
        12 => 'Q4',
        13 => 'D4',
        14 => 'D5',
        15 => 'Q5',
        16 => 'Q6',
        17 => 'D6',
        18 => 'D7',
        19 => 'Q7',
        20 => 'Vcc',
      ),
    ),
  ),
  74377 => 
  array (
    'description' => 'Octal D-type flip-flop with data enable; positive-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc377.74hct377.pdf',
    'pins' => 
    array (
      '~E' => 
      array (
        'desc' => 'data enable (active low)',
      ),
      'Q0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D0' => 
      array (
        'desc' => 'data input',
      ),
      'D1' => 
      array (
        'desc' => 'data input',
      ),
      'Q1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D2' => 
      array (
        'desc' => 'data input',
      ),
      'D3' => 
      array (
        'desc' => 'data input',
      ),
      'Q3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'Q4' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D4' => 
      array (
        'desc' => 'data input',
      ),
      'D5' => 
      array (
        'desc' => 'data input',
      ),
      'Q5' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q6' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'D6' => 
      array (
        'desc' => 'data input',
      ),
      'D7' => 
      array (
        'desc' => 'data input',
      ),
      'Q7' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Qn',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '77 (74HC)',
          1 => '53 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~E',
        2 => 'Q0',
        3 => 'D0',
        4 => 'D1',
        5 => 'Q1',
        6 => 'Q2',
        7 => 'D2',
        8 => 'D3',
        9 => 'Q3',
        10 => 'GND',
        11 => 'CP',
        12 => 'Q4',
        13 => 'D4',
        14 => 'D5',
        15 => 'Q5',
        16 => 'Q6',
        17 => 'D6',
        18 => 'D7',
        19 => 'Q7',
        20 => 'Vcc',
      ),
    ),
  ),
  74390 => 
  array (
    'description' => 'Dual decade ripple counter',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc390.74hct390.pdf',
    'pins' => 
    array (
      '1~CP~__0' => 
      array (
        'desc' => 'clock input, divide-by-2 section (high-to-low, edge-triggered)',
      ),
      '1MR' => 
      array (
        'desc' => 'asynchronous master reset (active high)',
      ),
      '1Q__0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '1~CP~__1' => 
      array (
        'desc' => 'clock input, divide-by-5 section (high-to-low, edge-triggered)',
      ),
      '1Q__1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '1Q__2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '1Q__3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2Q__3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '2Q__2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '2Q__1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '2~CP~__1' => 
      array (
        'desc' => 'clock input, divide-by-5 section (high-to-low, edge-triggered)',
      ),
      '2Q__0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '2MR' => 
      array (
        'desc' => 'asynchronous master reset (active high)',
      ),
      '2~CP~__0' => 
      array (
        'desc' => 'clock input, divide-by-2 section (high-to-low, edge-triggered)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP~__0 to nQ__0',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~CP~__1 to nQ__1',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~CP~__1 to nQ__2',
        'val' => 
        array (
          0 => '23 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, n~CP~__1 to nQ__3',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, nMR to nQ__n',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Maximum clock frequency, n~CP~__0 and n~CP~__1',
        'val' => 
        array (
          0 => '66 (74HC)',
          1 => '61 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~CP~__0',
        2 => '1MR',
        3 => '1Q__0',
        4 => '1~CP~__1',
        5 => '1Q__1',
        6 => '1Q__2',
        7 => '1Q__3',
        8 => 'GND',
        9 => '2Q__3',
        10 => '2Q__2',
        11 => '2Q__1',
        12 => '2~CP~__1',
        13 => '2Q__0',
        14 => '2MR',
        15 => '2~CP~__0',
        16 => 'Vcc',
      ),
    ),
  ),
  74393 => 
  array (
    'description' => 'Dual 4-bit binary ripple counter',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc393.74hct393.pdf',
    'pins' => 
    array (
      '1~CP' => 
      array (
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      '1MR' => 
      array (
        'desc' => 'asynchronous master reset (active high)',
      ),
      '1Q0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '1Q1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '1Q2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '1Q3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2Q3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '2Q2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '2Q1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '2Q0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '2MR' => 
      array (
        'desc' => 'asynchronous master reset (active high)',
      ),
      '2~CP' => 
      array (
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP to nQ0',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, nQx to nQ(x+1)',
        'val' => 
        array (
          0 => '5 (74HC)',
          1 => '6 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, nMR to nQx',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '99 (74HC)',
          1 => '53 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~CP',
        2 => '1MR',
        3 => '1Q0',
        4 => '1Q1',
        5 => '1Q2',
        6 => '1Q3',
        7 => 'GND',
        8 => '2Q3',
        9 => '2Q2',
        10 => '2Q1',
        11 => '2Q0',
        12 => '2MR',
        13 => '2~CP',
        14 => 'Vcc',
      ),
    ),
  ),
  7442 => 
  array (
    'description' => 'BCD to decimal decoder (1-of-10)',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc42.74hct42.pdf',
    'pins' => 
    array (
      '~Y~__0' => 
      array (
        'desc' => 'output',
      ),
      '~Y~__1' => 
      array (
        'desc' => 'output',
      ),
      '~Y~__2' => 
      array (
        'desc' => 'output',
      ),
      '~Y~__3' => 
      array (
        'desc' => 'output',
      ),
      '~Y~__4' => 
      array (
        'desc' => 'output',
      ),
      '~Y~__5' => 
      array (
        'desc' => 'output',
      ),
      '~Y~__6' => 
      array (
        'desc' => 'output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~Y~__7' => 
      array (
        'desc' => 'output',
      ),
      '~Y~__8' => 
      array (
        'desc' => 'output',
      ),
      '~Y~__9' => 
      array (
        'desc' => 'output',
      ),
      'A__3' => 
      array (
        'desc' => 'data input',
      ),
      'A__2' => 
      array (
        'desc' => 'data input',
      ),
      'A__1' => 
      array (
        'desc' => 'data input',
      ),
      'A__0' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'propagation delay, A__n to ~Y~__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~Y~__0',
        2 => '~Y~__1',
        3 => '~Y~__2',
        4 => '~Y~__3',
        5 => '~Y~__4',
        6 => '~Y~__5',
        7 => '~Y~__6',
        8 => 'GND',
        9 => '~Y~__7',
        10 => '~Y~__8',
        11 => '~Y~__9',
        12 => 'A__3',
        13 => 'A__2',
        14 => 'A__1',
        15 => 'A__0',
        16 => 'Vcc',
      ),
    ),
  ),
  74423 => 
  array (
    'description' => 'Dual retriggerable monostable multivibrator with reset',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc423.74hct423.pdf',
    'pins' => 
    array (
      '1~A' => 
      array (
        'desc' => 'negative-edge triggered input 1',
      ),
      '1B' => 
      array (
        'desc' => 'positive-edge triggered input 1',
      ),
      '1~R~D' => 
      array (
        'desc' => 'direct reset (active low) 1',
      ),
      '1~Q' => 
      array (
        'desc' => 'active low output 1',
      ),
      '2Q' => 
      array (
        'desc' => 'active high output 2',
      ),
      '2CEXT' => 
      array (
        'desc' => 'external capacitor connection 2',
      ),
      '2REXT/CEXT' => 
      array (
        'desc' => 'external resistor and capacitor connection 2',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~A' => 
      array (
        'desc' => 'negative-edge triggered input 2',
      ),
      '2B' => 
      array (
        'desc' => 'positive-edge triggered input 2',
      ),
      '2~R~D' => 
      array (
        'desc' => 'direct reset (active low) 2',
      ),
      '2~Q' => 
      array (
        'desc' => 'active low output 2',
      ),
      '1Q' => 
      array (
        'desc' => 'active high output 1',
      ),
      '1CEXT' => 
      array (
        'desc' => 'external capacitor connection 1',
      ),
      '1REXT/CEXT' => 
      array (
        'desc' => 'external resistor and capacitor connection 1',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~R~D, n~A, nB to nQ or n~Q',
        'val' => 
        array (
          0 => '25 (74HC)',
          1 => '26(74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~R~D to nQ or n~Q',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '22 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Output transition time',
        'val' => 
        array (
          0 => '7 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Retrigger time n~A, nB',
        'val' => 
        array (
          0 => '110 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'External timing resistor',
        'val' => 
        array (
          0 => '2 (min)',
          1 => '1000 (max)',
        ),
        'unit' => 'kΩ',
      ),
    ),
    'notes' => 
    array (
      0 => 'The 74423 is identical to the 74123, except it cannot be triggered via the reset input.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~A',
        2 => '1B',
        3 => '1~R~D',
        4 => '1~Q',
        5 => '2Q',
        6 => '2CEXT',
        7 => '2REXT/CEXT',
        8 => 'GND',
        9 => '2~A',
        10 => '2B',
        11 => '2~R~D',
        12 => '2~Q',
        13 => '1Q',
        14 => '1CEXT',
        15 => '1REXT/CEXT',
        16 => 'Vcc',
      ),
    ),
  ),
  74540 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc540.74hct540.pdf',
    'pins' => 
    array (
      '~OE~1' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'A__0' => 
      array (
        'desc' => 'data input',
      ),
      'A__1' => 
      array (
        'desc' => 'data input',
      ),
      'A__2' => 
      array (
        'desc' => 'data input',
      ),
      'A__3' => 
      array (
        'desc' => 'data input',
      ),
      'A__4' => 
      array (
        'desc' => 'data input',
      ),
      'A__5' => 
      array (
        'desc' => 'data input',
      ),
      'A__6' => 
      array (
        'desc' => 'data input',
      ),
      'A__7' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~Y~__7' => 
      array (
        'desc' => 'bus output',
      ),
      '~Y~__6' => 
      array (
        'desc' => 'bus output',
      ),
      '~Y~__5' => 
      array (
        'desc' => 'bus output',
      ),
      '~Y~__4' => 
      array (
        'desc' => 'bus output',
      ),
      '~Y~__3' => 
      array (
        'desc' => 'bus output',
      ),
      '~Y~__2' => 
      array (
        'desc' => 'bus output',
      ),
      '~Y~__1' => 
      array (
        'desc' => 'bus output',
      ),
      '~Y~__0' => 
      array (
        'desc' => 'bus output',
      ),
      '~OE~__2' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n to ~Y~__n',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE~1',
        2 => 'A__0',
        3 => 'A__1',
        4 => 'A__2',
        5 => 'A__3',
        6 => 'A__4',
        7 => 'A__5',
        8 => 'A__6',
        9 => 'A__7',
        10 => 'GND',
        11 => '~Y~__7',
        12 => '~Y~__6',
        13 => '~Y~__5',
        14 => '~Y~__4',
        15 => '~Y~__3',
        16 => '~Y~__2',
        17 => '~Y~__1',
        18 => '~Y~__0',
        19 => '~OE~__2',
        20 => 'Vcc',
      ),
    ),
  ),
  74541 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc541.74hct541.pdf',
    'pins' => 
    array (
      '~OE~1' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'A__0' => 
      array (
        'desc' => 'data input',
      ),
      'A__1' => 
      array (
        'desc' => 'data input',
      ),
      'A__2' => 
      array (
        'desc' => 'data input',
      ),
      'A__3' => 
      array (
        'desc' => 'data input',
      ),
      'A__4' => 
      array (
        'desc' => 'data input',
      ),
      'A__5' => 
      array (
        'desc' => 'data input',
      ),
      'A__6' => 
      array (
        'desc' => 'data input',
      ),
      'A__7' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Y__7' => 
      array (
        'desc' => 'bus output',
      ),
      'Y__6' => 
      array (
        'desc' => 'bus output',
      ),
      'Y__5' => 
      array (
        'desc' => 'bus output',
      ),
      'Y__4' => 
      array (
        'desc' => 'bus output',
      ),
      'Y__3' => 
      array (
        'desc' => 'bus output',
      ),
      'Y__2' => 
      array (
        'desc' => 'bus output',
      ),
      'Y__1' => 
      array (
        'desc' => 'bus output',
      ),
      'Y__0' => 
      array (
        'desc' => 'bus output',
      ),
      '~OE~__2' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n to Y__n',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE~1',
        2 => 'A__0',
        3 => 'A__1',
        4 => 'A__2',
        5 => 'A__3',
        6 => 'A__4',
        7 => 'A__5',
        8 => 'A__6',
        9 => 'A__7',
        10 => 'GND',
        11 => 'Y__7',
        12 => 'Y__6',
        13 => 'Y__5',
        14 => 'Y__4',
        15 => 'Y__3',
        16 => 'Y__2',
        17 => 'Y__1',
        18 => 'Y__0',
        19 => '~OE~__2',
        20 => 'Vcc',
      ),
    ),
  ),
  74563 => 
  array (
    'description' => 'Octal D-type transparent latch; 3-state; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc563.74hct563.pdf',
    'pins' => 
    array (
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'D__4' => 
      array (
        'desc' => 'data input',
      ),
      'D__5' => 
      array (
        'desc' => 'data input',
      ),
      'D__6' => 
      array (
        'desc' => 'data input',
      ),
      'D__7' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'LE' => 
      array (
        'desc' => 'latch enable (active high)',
      ),
      '~Q~__7' => 
      array (
        'desc' => 'latch output',
      ),
      '~Q~__6' => 
      array (
        'desc' => 'latch output',
      ),
      '~Q~__5' => 
      array (
        'desc' => 'latch output',
      ),
      '~Q~__4' => 
      array (
        'desc' => 'latch output',
      ),
      '~Q~__3' => 
      array (
        'desc' => 'latch output',
      ),
      '~Q~__2' => 
      array (
        'desc' => 'latch output',
      ),
      '~Q~__1' => 
      array (
        'desc' => 'latch output',
      ),
      '~Q~__0' => 
      array (
        'desc' => 'latch output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, D__n, LE to ~Q~__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE',
        2 => 'D__0',
        3 => 'D__1',
        4 => 'D__2',
        5 => 'D__3',
        6 => 'D__4',
        7 => 'D__5',
        8 => 'D__6',
        9 => 'D__7',
        10 => 'GND',
        11 => 'LE',
        12 => '~Q~__7',
        13 => '~Q~__6',
        14 => '~Q~__5',
        15 => '~Q~__4',
        16 => '~Q~__3',
        17 => '~Q~__2',
        18 => '~Q~__1',
        19 => '~Q~__0',
        20 => 'Vcc',
      ),
    ),
  ),
  74564 => 
  array (
    'description' => 'Octal D-type flip-flop; positive-edge trigger; 3-state; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc564.pdf',
    'pins' => 
    array (
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'D__4' => 
      array (
        'desc' => 'data input',
      ),
      'D__5' => 
      array (
        'desc' => 'data input',
      ),
      'D__6' => 
      array (
        'desc' => 'data input',
      ),
      'D__7' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      '~Q~__7' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__6' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__5' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__4' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      '~Q~__0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to ~Q~__n',
        'val' => '15 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '127 (74HC)',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE',
        2 => 'D__0',
        3 => 'D__1',
        4 => 'D__2',
        5 => 'D__3',
        6 => 'D__4',
        7 => 'D__5',
        8 => 'D__6',
        9 => 'D__7',
        10 => 'GND',
        11 => 'CP',
        12 => '~Q~__7',
        13 => '~Q~__6',
        14 => '~Q~__5',
        15 => '~Q~__4',
        16 => '~Q~__3',
        17 => '~Q~__2',
        18 => '~Q~__1',
        19 => '~Q~__0',
        20 => 'Vcc',
      ),
    ),
  ),
  74573 => 
  array (
    'description' => 'Octal D-type transparent latch; 3-state; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc573.74hct573.pdf',
    'pins' => 
    array (
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'D__4' => 
      array (
        'desc' => 'data input',
      ),
      'D__5' => 
      array (
        'desc' => 'data input',
      ),
      'D__6' => 
      array (
        'desc' => 'data input',
      ),
      'D__7' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'LE' => 
      array (
        'desc' => 'latch enable (active high)',
      ),
      'Q__7' => 
      array (
        'desc' => 'latch output',
      ),
      'Q__6' => 
      array (
        'desc' => 'latch output',
      ),
      'Q__5' => 
      array (
        'desc' => 'latch output',
      ),
      'Q__4' => 
      array (
        'desc' => 'latch output',
      ),
      'Q__3' => 
      array (
        'desc' => 'latch output',
      ),
      'Q__2' => 
      array (
        'desc' => 'latch output',
      ),
      'Q__1' => 
      array (
        'desc' => 'latch output',
      ),
      'Q__0' => 
      array (
        'desc' => 'latch output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, D__n to Q__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, LE to Q__n',
        'val' => '15 (74HC/HCT)',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE',
        2 => 'D__0',
        3 => 'D__1',
        4 => 'D__2',
        5 => 'D__3',
        6 => 'D__4',
        7 => 'D__5',
        8 => 'D__6',
        9 => 'D__7',
        10 => 'GND',
        11 => 'LE',
        12 => 'Q__7',
        13 => 'Q__6',
        14 => 'Q__5',
        15 => 'Q__4',
        16 => 'Q__3',
        17 => 'Q__2',
        18 => 'Q__1',
        19 => 'Q__0',
        20 => 'Vcc',
      ),
    ),
  ),
  74574 => 
  array (
    'description' => 'Octal D-type flip-flop; positive-edge trigger; 3-state; non-inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc574.74hct574.pdf',
    'pins' => 
    array (
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'D__4' => 
      array (
        'desc' => 'data input',
      ),
      'D__5' => 
      array (
        'desc' => 'data input',
      ),
      'D__6' => 
      array (
        'desc' => 'data input',
      ),
      'D__7' => 
      array (
        'desc' => 'data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CP' => 
      array (
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      'Q__7' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q__6' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q__5' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q__4' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q__3' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q__2' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q__1' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Q__0' => 
      array (
        'desc' => 'flip-flop output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '123 (74HC)',
          1 => '76 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~OE',
        2 => 'D__0',
        3 => 'D__1',
        4 => 'D__2',
        5 => 'D__3',
        6 => 'D__4',
        7 => 'D__5',
        8 => 'D__6',
        9 => 'D__7',
        10 => 'GND',
        11 => 'CP',
        12 => 'Q__7',
        13 => 'Q__6',
        14 => 'Q__5',
        15 => 'Q__4',
        16 => 'Q__3',
        17 => 'Q__2',
        18 => 'Q__1',
        19 => 'Q__0',
        20 => 'Vcc',
      ),
    ),
  ),
  7458 => 
  array (
    'description' => 'Dual AND-OR gate',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc58.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2C' => 
      array (
        'desc' => 'data input',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output (2A · 2B) + (2C · 2D)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '1Y' => 
      array (
        'desc' => 'data output (1A · 1B · 1C) + (1D · 1E · 1F)',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      '1E' => 
      array (
        'desc' => 'data input',
      ),
      '1F' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1C' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, 1n to 1Y',
        'val' => '11 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, 2n to 2Y',
        'val' => '9 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '2A',
        3 => '2B',
        4 => '2C',
        5 => '2D',
        6 => '2Y',
        7 => 'GND',
        8 => '1Y',
        9 => '1D',
        10 => '1E',
        11 => '1F',
        12 => '1B',
        13 => '1C',
        14 => 'Vcc',
      ),
    ),
  ),
  74590 => 
  array (
    'description' => '8-bit binary counter with output register; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc590.pdf',
    'pins' => 
    array (
      'Q1' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q2' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q3' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q4' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q5' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q6' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q7' => 
      array (
        'desc' => 'parallel data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '~RCO' => 
      array (
        'desc' => 'ripple carry output (active low)',
      ),
      '~MRC' => 
      array (
        'desc' => 'master reset (active low)',
      ),
      'CPC' => 
      array (
        'desc' => 'counter clock input (active high)',
      ),
      '~CE' => 
      array (
        'desc' => 'count enable (active low)',
      ),
      'CPR' => 
      array (
        'desc' => 'register clock input (active high)',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Q0' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CPR to ~RCO',
        'val' => '19 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CPR to Qn',
        'val' => '18 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum frequency, CPC and CPR',
        'val' => '52 (74HC)',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q1',
        2 => 'Q2',
        3 => 'Q3',
        4 => 'Q4',
        5 => 'Q5',
        6 => 'Q6',
        7 => 'Q7',
        8 => 'GND',
        9 => '~RCO',
        10 => '~MRC',
        11 => 'CPC',
        12 => '~CE',
        13 => 'CPR',
        14 => '~OE',
        15 => 'Q0',
        16 => 'Vcc',
      ),
    ),
  ),
  74594 => 
  array (
    'description' => '8-bit shift register with output register',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc594.74hct594.pdf',
    'pins' => 
    array (
      'Q1' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q2' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q3' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q4' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q5' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q6' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q7' => 
      array (
        'desc' => 'parallel data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q7S' => 
      array (
        'desc' => 'serial data output',
      ),
      '~SHR' => 
      array (
        'desc' => 'shift register reset (active low)',
      ),
      'SHCP' => 
      array (
        'desc' => 'shift register clock input',
      ),
      'STCP' => 
      array (
        'desc' => 'storage register clock input',
      ),
      '~STR' => 
      array (
        'desc' => 'storage register reset (active low)',
      ),
      'DS' => 
      array (
        'desc' => 'serial data input',
      ),
      'Q0' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, SHCP to Q7S',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, STCP to Qn',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum frequency, SHCP or STCP',
        'val' => 
        array (
          0 => '100 (74HC/74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q1',
        2 => 'Q2',
        3 => 'Q3',
        4 => 'Q4',
        5 => 'Q5',
        6 => 'Q6',
        7 => 'Q7',
        8 => 'GND',
        9 => 'Q7S',
        10 => '~SHR',
        11 => 'SHCP',
        12 => 'STCP',
        13 => '~STR',
        14 => 'DS',
        15 => 'Q0',
        16 => 'Vcc',
      ),
    ),
  ),
  74595 => 
  array (
    'description' => '8-bit serial-in, serial or parallel-out shift register with output latches; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT595_4.pdf',
    'pins' => 
    array (
      'Q1' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q2' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q3' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q4' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q5' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q6' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Q7' => 
      array (
        'desc' => 'parallel data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q7\'' => 
      array (
        'desc' => 'serial data output',
      ),
      '~MR' => 
      array (
        'desc' => 'master reset (active low)',
      ),
      'SCK' => 
      array (
        'desc' => 'shift register clock input',
      ),
      'RCK' => 
      array (
        'desc' => 'storage register latch input',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'DS' => 
      array (
        'desc' => 'serial data input',
      ),
      'Q0' => 
      array (
        'desc' => 'parallel data output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, SCK to Q7\'',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '25 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, SCK to Qn',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '24 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~MR to Q7\'',
        'val' => 
        array (
          0 => '100 (74HC)',
          1 => '52 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency, SCK and RCK',
        'val' => 
        array (
          0 => '100 (74HC)',
          1 => '57 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'Q1',
        2 => 'Q2',
        3 => 'Q3',
        4 => 'Q4',
        5 => 'Q5',
        6 => 'Q6',
        7 => 'Q7',
        8 => 'GND',
        9 => 'Q7\'',
        10 => '~MR',
        11 => 'SCK',
        12 => 'RCK',
        13 => '~OE',
        14 => 'DS',
        15 => 'Q0',
        16 => 'Vcc',
      ),
    ),
  ),
  74597 => 
  array (
    'description' => '8-bit shift register with input flip-flops',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc597.74hct597.pdf',
    'pins' => 
    array (
      'D__1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__3' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__4' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__5' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__6' => 
      array (
        'desc' => 'parallel data input',
      ),
      'D__7' => 
      array (
        'desc' => 'parallel data input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q' => 
      array (
        'desc' => 'serial data output',
      ),
      '~MR' => 
      array (
        'desc' => 'asynchronous master reset (active low)',
      ),
      'SH__CP' => 
      array (
        'desc' => 'shift clock input (low-to-high, edge-triggered)',
      ),
      'ST__CP' => 
      array (
        'desc' => 'storage clock input (low-to-high, edge-triggered)',
      ),
      '~PL' => 
      array (
        'desc' => 'parallel load input (active low)',
      ),
      'D__S' => 
      array (
        'desc' => 'serial data input',
      ),
      'D__0' => 
      array (
        'desc' => 'parallel data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, SH__CP to Q',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ST__CP to Q',
        'val' => 
        array (
          0 => '25 (74HC)',
          1 => '29 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~PL to Q',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency, SH__CP',
        'val' => 
        array (
          0 => '96 (74HC)',
          1 => '83 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D__1',
        2 => 'D__2',
        3 => 'D__3',
        4 => 'D__4',
        5 => 'D__5',
        6 => 'D__6',
        7 => 'D__7',
        8 => 'GND',
        9 => 'Q',
        10 => '~MR',
        11 => 'SH__CP',
        12 => 'ST__CP',
        13 => '~PL',
        14 => 'D__S',
        15 => 'D__0',
        16 => 'Vcc',
      ),
    ),
  ),
  74640 => 
  array (
    'description' => 'Octal bus transceiver; 3-state; inverting',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc640.74hct640.pdf',
    'pins' => 
    array (
      'DIR' => 
      array (
        'desc' => 'direction control',
      ),
      'A__0' => 
      array (
        'desc' => 'data input/output',
      ),
      'A__1' => 
      array (
        'desc' => 'data input/output',
      ),
      'A__2' => 
      array (
        'desc' => 'data input/output',
      ),
      'A__3' => 
      array (
        'desc' => 'data input/output',
      ),
      'A__4' => 
      array (
        'desc' => 'data input/output',
      ),
      'A__5' => 
      array (
        'desc' => 'data input/output',
      ),
      'A__6' => 
      array (
        'desc' => 'data input/output',
      ),
      'A__7' => 
      array (
        'desc' => 'data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'B__7' => 
      array (
        'desc' => 'data input/output',
      ),
      'B__6' => 
      array (
        'desc' => 'data input/output',
      ),
      'B__5' => 
      array (
        'desc' => 'data input/output',
      ),
      'B__4' => 
      array (
        'desc' => 'data input/output',
      ),
      'B__3' => 
      array (
        'desc' => 'data input/output',
      ),
      'B__2' => 
      array (
        'desc' => 'data input/output',
      ),
      'B__1' => 
      array (
        'desc' => 'data input/output',
      ),
      'B__0' => 
      array (
        'desc' => 'data input/output',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n to B__n',
        'val' => '11 (74HC/HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, B__n to A__n',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'DIR',
        2 => 'A__0',
        3 => 'A__1',
        4 => 'A__2',
        5 => 'A__3',
        6 => 'A__4',
        7 => 'A__5',
        8 => 'A__6',
        9 => 'A__7',
        10 => 'GND',
        11 => 'B__7',
        12 => 'B__6',
        13 => 'B__5',
        14 => 'B__4',
        15 => 'B__3',
        16 => 'B__2',
        17 => 'B__1',
        18 => 'B__0',
        19 => '~OE',
        20 => 'Vcc',
      ),
    ),
  ),
  74646 => 
  array (
    'description' => 'Octal bus transceiver/register; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc646.74hct646.pdf',
    'pins' => 
    array (
      'CP__AB' => 
      array (
        'desc' => 'A to B clock input (low-to-high, edge-triggered)',
      ),
      'S__AB' => 
      array (
        'desc' => 'select A to B source input',
      ),
      'DIR' => 
      array (
        'desc' => 'direction control input',
      ),
      'A__0' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__1' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__2' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__3' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__4' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__5' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__6' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__7' => 
      array (
        'desc' => 'A data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'B__7' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__6' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__5' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__4' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__3' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__2' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__1' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__0' => 
      array (
        'desc' => 'B data input/output',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'S__BA' => 
      array (
        'desc' => 'select B to A source input',
      ),
      'CP__BA' => 
      array (
        'desc' => 'B to A clock input (low-to-high, edge-triggered)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n, B__n to B__n, A__n',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '69 (74HC)',
          1 => '85 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'CP__AB',
        2 => 'S__AB',
        3 => 'DIR',
        4 => 'A__0',
        5 => 'A__1',
        6 => 'A__2',
        7 => 'A__3',
        8 => 'A__4',
        9 => 'A__5',
        10 => 'A__6',
        11 => 'A__7',
        12 => 'GND',
        13 => 'B__7',
        14 => 'B__6',
        15 => 'B__5',
        16 => 'B__4',
        17 => 'B__3',
        18 => 'B__2',
        19 => 'B__1',
        20 => 'B__0',
        21 => '~OE',
        22 => 'S__BA',
        23 => 'CP__BA',
        24 => 'Vcc',
      ),
    ),
  ),
  74652 => 
  array (
    'description' => 'Octal bus transceiver/register; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc652.74hct652.pdf',
    'pins' => 
    array (
      'CP__AB' => 
      array (
        'desc' => 'A to B clock input (low-to-high, edge-triggered)',
      ),
      'S__AB' => 
      array (
        'desc' => 'select A to B source input',
      ),
      'OE__AB' => 
      array (
        'desc' => 'output enable A to B',
      ),
      'A__0' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__1' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__2' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__3' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__4' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__5' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__6' => 
      array (
        'desc' => 'A data input/output',
      ),
      'A__7' => 
      array (
        'desc' => 'A data input/output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'B__7' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__6' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__5' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__4' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__3' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__2' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__1' => 
      array (
        'desc' => 'B data input/output',
      ),
      'B__0' => 
      array (
        'desc' => 'B data input/output',
      ),
      '~OE~__BA' => 
      array (
        'desc' => 'output enable B to A (active low)',
      ),
      'S__BA' => 
      array (
        'desc' => 'select B to A source input',
      ),
      'CP__BA' => 
      array (
        'desc' => 'B to A clock input (low-to-high, edge-triggered)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n/B__n to B__n/A__n',
        'val' => '13 (74HC/HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP__AB/CP__BA to B__n/A__n',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, S__AB/S__BA to B__n/A__n',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '92 (74HC/HCT)',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'CP__AB',
        2 => 'S__AB',
        3 => 'OE__AB',
        4 => 'A__0',
        5 => 'A__1',
        6 => 'A__2',
        7 => 'A__3',
        8 => 'A__4',
        9 => 'A__5',
        10 => 'A__6',
        11 => 'A__7',
        12 => 'GND',
        13 => 'B__7',
        14 => 'B__6',
        15 => 'B__5',
        16 => 'B__4',
        17 => 'B__3',
        18 => 'B__2',
        19 => 'B__1',
        20 => 'B__0',
        21 => '~OE~__BA',
        22 => 'S__BA',
        23 => 'CP__BA',
        24 => 'Vcc',
      ),
    ),
  ),
  74670 => 
  array (
    'description' => '4 by 4 register file; 3-state',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc670.74hct670.pdf',
    'pins' => 
    array (
      'D__1' => 
      array (
        'desc' => 'data input',
      ),
      'D__2' => 
      array (
        'desc' => 'data input',
      ),
      'D__3' => 
      array (
        'desc' => 'data input',
      ),
      'R__B' => 
      array (
        'desc' => 'read address input',
      ),
      'R__A' => 
      array (
        'desc' => 'read address input',
      ),
      'Q__3' => 
      array (
        'desc' => 'data output',
      ),
      'Q__2' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q__1' => 
      array (
        'desc' => 'data output',
      ),
      'Q__0' => 
      array (
        'desc' => 'data output',
      ),
      '~RE' => 
      array (
        'desc' => '3-state output read enable (active low)',
      ),
      '~WE' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'W__B' => 
      array (
        'desc' => 'write address input',
      ),
      'W__A' => 
      array (
        'desc' => 'write address input',
      ),
      'D__0' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, D__n to Q__n',
        'val' => '23 (74HC/HCT]',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D__1',
        2 => 'D__2',
        3 => 'D__3',
        4 => 'R__B',
        5 => 'R__A',
        6 => 'Q__3',
        7 => 'Q__2',
        8 => 'GND',
        9 => 'Q__1',
        10 => 'Q__0',
        11 => '~RE',
        12 => '~WE',
        13 => 'W__B',
        14 => 'W__A',
        15 => 'D__0',
        16 => 'Vcc',
      ),
    ),
  ),
  74688 => 
  array (
    'description' => '8-bit magnitude comparator',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc688.74hct688.pdf',
    'pins' => 
    array (
      '~E' => 
      array (
        'desc' => 'enable (active low)',
      ),
      'P__0' => 
      array (
        'desc' => 'word input',
      ),
      'Q__0' => 
      array (
        'desc' => 'word input',
      ),
      'P__1' => 
      array (
        'desc' => 'word input',
      ),
      'Q__1' => 
      array (
        'desc' => 'word input',
      ),
      'P__2' => 
      array (
        'desc' => 'word input',
      ),
      'Q__2' => 
      array (
        'desc' => 'word input',
      ),
      'P__3' => 
      array (
        'desc' => 'word input',
      ),
      'Q__3' => 
      array (
        'desc' => 'word input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'P__4' => 
      array (
        'desc' => 'word input',
      ),
      'Q__4' => 
      array (
        'desc' => 'word input',
      ),
      'P__5' => 
      array (
        'desc' => 'word input',
      ),
      'Q__5' => 
      array (
        'desc' => 'word input',
      ),
      'P__6' => 
      array (
        'desc' => 'word input',
      ),
      'Q__6' => 
      array (
        'desc' => 'word input',
      ),
      'P__7' => 
      array (
        'desc' => 'word input',
      ),
      'Q__7' => 
      array (
        'desc' => 'word input',
      ),
      '~P=Q~' => 
      array (
        'desc' => 'equal-to output (low when P = Q)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, P__n, Q__n to ~P=Q~',
        'val' => '17 (74HC/HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~E to ~P=Q~',
        'val' => 
        array (
          0 => '8 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~E',
        2 => 'P__0',
        3 => 'Q__0',
        4 => 'P__1',
        5 => 'Q__1',
        6 => 'P__2',
        7 => 'Q__2',
        8 => 'P__3',
        9 => 'Q__3',
        10 => 'GND',
        11 => 'P__4',
        12 => 'Q__4',
        13 => 'P__5',
        14 => 'Q__5',
        15 => 'P__6',
        16 => 'Q__6',
        17 => 'P__7',
        18 => 'Q__7',
        19 => '~P=Q~',
        20 => 'Vcc',
      ),
    ),
  ),
  7473 => 
  array (
    'description' => 'Dual J-K flip-flop with reset; negative-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc73.pdf',
    'pins' => 
    array (
      '1~CP' => 
      array (
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      '1~R' => 
      array (
        'desc' => 'asynchronous reset (active low)',
      ),
      '1K' => 
      array (
        'desc' => 'synchronous K input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      '2~CP' => 
      array (
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      '2~R' => 
      array (
        'desc' => 'asynchronous reset (active low)',
      ),
      '2J' => 
      array (
        'desc' => 'synchronous J input',
      ),
      '2~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '2Q' => 
      array (
        'desc' => 'true output',
      ),
      '2K' => 
      array (
        'desc' => 'synchronous K input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '1Q' => 
      array (
        'desc' => 'true output',
      ),
      '1~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '1J' => 
      array (
        'desc' => 'synchronous J input',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP to nQ',
        'val' => '16 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~CP to n~Q',
        'val' => '16 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R to nQ, n~Q',
        'val' => '15 (74HC)',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum frequency',
        'val' => '77 (74HC)',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~CP',
        2 => '1~R',
        3 => '1K',
        4 => 'Vcc',
        5 => '2~CP',
        6 => '2~R',
        7 => '2J',
        8 => '2~Q',
        9 => '2Q',
        10 => '2K',
        11 => 'GND',
        12 => '1Q',
        13 => '1~Q',
        14 => '1J',
      ),
    ),
  ),
  7474 => 
  array (
    'description' => 'Dual D-type flip-flop with set and reset; positive-edge trigger',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc74.74hct74.pdf',
    'pins' => 
    array (
      '1~R~D' => 
      array (
        'desc' => 'asynchronous reset-direct input (active low)',
      ),
      '1D' => 
      array (
        'desc' => 'data input',
      ),
      '1CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '1~S~D' => 
      array (
        'desc' => 'asynchronous set-direct input (active low)',
      ),
      '1Q' => 
      array (
        'desc' => 'true output',
      ),
      '1~Q' => 
      array (
        'desc' => 'complement output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2~Q' => 
      array (
        'desc' => 'complement output',
      ),
      '2Q' => 
      array (
        'desc' => 'true output',
      ),
      '2~S~D' => 
      array (
        'desc' => 'asynchronous set-direct input (active low)',
      ),
      '2CP' => 
      array (
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      '2D' => 
      array (
        'desc' => 'data input',
      ),
      '2~R~D' => 
      array (
        'desc' => 'asynchronous reset-direct input (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nCP to nQ, n~Q',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~S~D to nQ, n~Q',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R~D to nQ, n~Q',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '76 (74HC)',
          1 => '59 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~R~D',
        2 => '1D',
        3 => '1CP',
        4 => '1~S~D',
        5 => '1Q',
        6 => '1~Q',
        7 => 'GND',
        8 => '2~Q',
        9 => '2Q',
        10 => '2~S~D',
        11 => '2CP',
        12 => '2D',
        13 => '2~R~D',
        14 => 'Vcc',
      ),
    ),
  ),
  7475 => 
  array (
    'description' => 'Quad bistable transparent latch',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC75_3.pdf',
    'pins' => 
    array (
      '1~Q' => 
      array (
        'desc' => 'complementary latch output 1',
      ),
      '1D' => 
      array (
        'desc' => 'data input 1',
      ),
      '2D' => 
      array (
        'desc' => 'data input 2',
      ),
      'LE34' => 
      array (
        'desc' => 'latch enable input for latches 3 and 4',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      '3D' => 
      array (
        'desc' => 'data input 3',
      ),
      '4D' => 
      array (
        'desc' => 'data input 4',
      ),
      '4~Q' => 
      array (
        'desc' => 'complementary latch output 4',
      ),
      '4Q' => 
      array (
        'desc' => 'latch output 4',
      ),
      '3Q' => 
      array (
        'desc' => 'latch output 3',
      ),
      '3~Q' => 
      array (
        'desc' => 'complementary latch output 3',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'LE12' => 
      array (
        'desc' => 'latch enable input for latches 1 and 2',
      ),
      '2~Q' => 
      array (
        'desc' => 'complementary latch output 2',
      ),
      '2Q' => 
      array (
        'desc' => 'latch output 2',
      ),
      '1Q' => 
      array (
        'desc' => 'latch output 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay',
        'val' => '11 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1~Q',
        2 => '1D',
        3 => '2D',
        4 => 'LE34',
        5 => 'Vcc',
        6 => '3D',
        7 => '4D',
        8 => '4~Q',
        9 => '4Q',
        10 => '3Q',
        11 => '3~Q',
        12 => 'GND',
        13 => 'LE12',
        14 => '2~Q',
        15 => '2Q',
        16 => '1Q',
      ),
    ),
  ),
  7485 => 
  array (
    'description' => '4-bit magnitude comparator',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc85.74hct85.pdf',
    'pins' => 
    array (
      'B__3' => 
      array (
        'desc' => 'word B input',
      ),
      'I__A<B' => 
      array (
        'desc' => 'A < B expansion input',
      ),
      'I__A=B' => 
      array (
        'desc' => 'A = B expansion input',
      ),
      'I__A>B' => 
      array (
        'desc' => 'A > B expansion input',
      ),
      'Q__A>B' => 
      array (
        'desc' => 'A > B output',
      ),
      'Q__A=B' => 
      array (
        'desc' => 'A = B output',
      ),
      'Q__A<B' => 
      array (
        'desc' => 'A < B output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'B__0' => 
      array (
        'desc' => 'word B input',
      ),
      'A__0' => 
      array (
        'desc' => 'word A input',
      ),
      'B__1' => 
      array (
        'desc' => 'word B input',
      ),
      'A__1' => 
      array (
        'desc' => 'word A input',
      ),
      'A__2' => 
      array (
        'desc' => 'word A input',
      ),
      'B__2' => 
      array (
        'desc' => 'word B input',
      ),
      'A__3' => 
      array (
        'desc' => 'word A input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n, B__n to Q__A>B, Q__A<B',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '22 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, A__n, B__n to Q__A=B',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, I__A<B, I__A=B, I__A>B to Q__A<B, Q__A>B',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, I__A=B to Q__A=B',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'The least significant (or only) comparator in a chain should have I__A<B and I__A>B tied low and I__A=B tied high.',
      1 => 'To compare more than 4 bits, connect the outputs to the expansion inputs of the next significant comparator.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'B__3',
        2 => 'I__A<B',
        3 => 'I__A=B',
        4 => 'I__A>B',
        5 => 'Q__A>B',
        6 => 'Q__A=B',
        7 => 'Q__A<B',
        8 => 'GND',
        9 => 'B__0',
        10 => 'A__0',
        11 => 'B__1',
        12 => 'A__1',
        13 => 'A__2',
        14 => 'B__2',
        15 => 'A__3',
        16 => 'Vcc',
      ),
    ),
  ),
  7486 => 
  array (
    'description' => 'Quad 2-input XOR gate',
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT86_CNV_2.pdf',
    'pins' => 
    array (
      '1A' => 
      array (
        'desc' => 'data input',
      ),
      '1B' => 
      array (
        'desc' => 'data input',
      ),
      '1Y' => 
      array (
        'desc' => 'data output',
      ),
      '2A' => 
      array (
        'desc' => 'data input',
      ),
      '2B' => 
      array (
        'desc' => 'data input',
      ),
      '2Y' => 
      array (
        'desc' => 'data output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '3Y' => 
      array (
        'desc' => 'data output',
      ),
      '3A' => 
      array (
        'desc' => 'data input',
      ),
      '3B' => 
      array (
        'desc' => 'data input',
      ),
      '4Y' => 
      array (
        'desc' => 'data output',
      ),
      '4A' => 
      array (
        'desc' => 'data input',
      ),
      '4B' => 
      array (
        'desc' => 'data input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1A',
        2 => '1B',
        3 => '1Y',
        4 => '2A',
        5 => '2B',
        6 => '2Y',
        7 => 'GND',
        8 => '3Y',
        9 => '3A',
        10 => '3B',
        11 => '4Y',
        12 => '4A',
        13 => '4B',
        14 => 'Vcc',
      ),
    ),
  ),
  7490 => 
  array (
    'description' => '4-bit decade counter',
    'family' => '7400',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/sn74ls90.pdf',
    'pins' => 
    array (
      'CKB' => 
      array (
        'desc' => 'clock input',
      ),
      'R0(1)' => 
      array (
        'desc' => 'reset to 0',
      ),
      'R0(2)' => 
      array (
        'desc' => 'reset to 0',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'R9(1)' => 
      array (
        'desc' => 'reset to 9',
      ),
      'R9(2)' => 
      array (
        'desc' => 'reset to 9',
      ),
      'Q__C' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__B' => 
      array (
        'desc' => 'counter output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q__D' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__A' => 
      array (
        'desc' => 'counter output',
      ),
      'CKA' => 
      array (
        'desc' => 'clock input',
      ),
    ),
    'notes' => 
    array (
      0 => 'For maximum count length, connect CKB to Q__A and apply input pulses to CKA.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'CKB',
        2 => 'R0(1)',
        3 => 'R0(2)',
        4 => 'NC',
        5 => 'Vcc',
        6 => 'R9(1)',
        7 => 'R9(2)',
        8 => 'Q__C',
        9 => 'Q__B',
        10 => 'GND',
        11 => 'Q__D',
        12 => 'Q__A',
        13 => 'NC',
        14 => 'CKA',
      ),
    ),
  ),
  7493 => 
  array (
    'description' => '4-bit binary ripple counter',
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc93.74hct93.pdf',
    'pins' => 
    array (
      '~CP~__1' => 
      array (
        'desc' => 'clock input, 2nd, 3rd and 4th section (high-to-low edge-triggered)',
      ),
      'MR__1' => 
      array (
        'desc' => 'asynchronous master reset',
      ),
      'MR__2' => 
      array (
        'desc' => 'asynchronous master reset',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'Q__2' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__1' => 
      array (
        'desc' => 'counter output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Q__3' => 
      array (
        'desc' => 'counter output',
      ),
      'Q__0' => 
      array (
        'desc' => 'counter output',
      ),
      '~CP~__0' => 
      array (
        'desc' => 'clock input, 1st section (high-to-low edge-triggered)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, ~CP~__0 to Q__0',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '100 (74HC)',
          1 => '77 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'State changes of Q__n outputs do not occur simultaneously.',
      1 => 'Setting both MR__1 and MR__2 high resets the counter to zero.',
      2 => 'For a 4-bit counter, connect Q__0 to ~CP~__1, and apply count pulses to ~CP~__0.',
      3 => 'For a 3-bit counter, apply count pulses to ~CP~__1.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~CP~__1',
        2 => 'MR__1',
        3 => 'MR__2',
        4 => 'NC',
        5 => 'Vcc',
        6 => 'NC',
        7 => 'NC',
        8 => 'Q__2',
        9 => 'Q__1',
        10 => 'GND',
        11 => 'Q__3',
        12 => 'Q__0',
        13 => 'NC',
        14 => '~CP~__0',
      ),
    ),
  ),
  8254 => 
  array (
    'description' => 'Programmable interval timer',
    'aliases' => 
    array (
      0 => '82C54',
    ),
    'family' => 'Intel',
    'datasheet' => 'http://www.scs.stanford.edu/10wi-cs140/pintos/specs/8254.pdf',
    'pins' => 
    array (
      'D7' => 
      array (
        'desc' => 'data bus',
      ),
      'D6' => 
      array (
        'desc' => 'data bus',
      ),
      'D5' => 
      array (
        'desc' => 'data bus',
      ),
      'D4' => 
      array (
        'desc' => 'data bus',
      ),
      'D3' => 
      array (
        'desc' => 'data bus',
      ),
      'D2' => 
      array (
        'desc' => 'data bus',
      ),
      'D1' => 
      array (
        'desc' => 'data bus',
      ),
      'D0' => 
      array (
        'desc' => 'data bus',
      ),
      'CLK 0' => 
      array (
        'desc' => 'counter 0 clock input',
      ),
      'OUT 0' => 
      array (
        'desc' => 'counter 0 output',
      ),
      'GATE 0' => 
      array (
        'desc' => 'counter 0 gate input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'OUT 1' => 
      array (
        'desc' => 'counter 1 output',
      ),
      'GATE 1' => 
      array (
        'desc' => 'counter 1 gate input',
      ),
      'CLK 1' => 
      array (
        'desc' => 'counter 1 clock input',
      ),
      'GATE 2' => 
      array (
        'desc' => 'counter 2 gate input',
      ),
      'OUT 2' => 
      array (
        'desc' => 'counter 2 output',
      ),
      'CLK 2' => 
      array (
        'desc' => 'counter 2 clock input',
      ),
      'A0' => 
      array (
        'desc' => 'address bus',
      ),
      'A1' => 
      array (
        'desc' => 'address bus',
      ),
      '~CS' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      '~RD' => 
      array (
        'desc' => 'read enable (active low)',
      ),
      '~WR' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum clock input frequency',
        'val' => 
        array (
          0 => '8 (8254)',
          1 => '10 (8254-2)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Register 00: counter 0 value',
      1 => 'Register 01: counter 1 value',
      2 => 'Register 10: counter 2 value',
      3 => 'Register 11: control word',
      4 => 'Control word:
<table>
<tr><td>Bit 0</td><td>0=binary (16 bits), 1=BCD (4 decades)</td></tr>
<tr><td>Bits 1-3</td><td>mode select</td></tr>
<tr><td>Bits 4-5</td><td>read/write mode</td></tr>
<tr><td>Bits 6-7</td><td>select counter/read-back mode</td></tr>
</table><br/>',
      5 => 'Mode 0: interrupt on terminal count',
      6 => 'Mode 1: hardware retriggerable one-shot',
      7 => 'Mode 2: rate generator',
      8 => 'Mode 3: square wave',
      9 => 'Mode 4: software triggered strobe',
      10 => 'Mode 5: hardware triggered strobe (retriggerable)',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D7',
        2 => 'D6',
        3 => 'D5',
        4 => 'D4',
        5 => 'D3',
        6 => 'D2',
        7 => 'D1',
        8 => 'D0',
        9 => 'CLK 0',
        10 => 'OUT 0',
        11 => 'GATE 0',
        12 => 'GND',
        13 => 'OUT 1',
        14 => 'GATE 1',
        15 => 'CLK 1',
        16 => 'GATE 2',
        17 => 'OUT 2',
        18 => 'CLK 2',
        19 => 'A0',
        20 => 'A1',
        21 => '~CS',
        22 => '~RD',
        23 => '~WR',
        24 => 'Vcc',
      ),
    ),
  ),
  '8255A' => 
  array (
    'description' => 'Programmable peripheral interface',
    'aliases' => 
    array (
      0 => '82C55A',
    ),
    'family' => 'Intel',
    'datasheet' => 'http://www.intersil.com/data/fn/fn2969.pdf',
    'pins' => 
    array (
      'PA3' => 
      array (
        'desc' => 'port A',
      ),
      'PA2' => 
      array (
        'desc' => 'port A',
      ),
      'PA1' => 
      array (
        'desc' => 'port A',
      ),
      'PA0' => 
      array (
        'desc' => 'port A',
      ),
      '~RD' => 
      array (
        'desc' => 'read enable (active low)',
      ),
      '~CS' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'A1' => 
      array (
        'desc' => 'address input',
      ),
      'A0' => 
      array (
        'desc' => 'address input',
      ),
      'PC7' => 
      array (
        'desc' => 'port C',
      ),
      'PC6' => 
      array (
        'desc' => 'port C',
      ),
      'PC5' => 
      array (
        'desc' => 'port C',
      ),
      'PC4' => 
      array (
        'desc' => 'port C',
      ),
      'PC0' => 
      array (
        'desc' => 'port C',
      ),
      'PC1' => 
      array (
        'desc' => 'port C',
      ),
      'PC2' => 
      array (
        'desc' => 'port C',
      ),
      'PC3' => 
      array (
        'desc' => 'port C',
      ),
      'PB0' => 
      array (
        'desc' => 'port B',
      ),
      'PB1' => 
      array (
        'desc' => 'port B',
      ),
      'PB2' => 
      array (
        'desc' => 'port B',
      ),
      'PB3' => 
      array (
        'desc' => 'port B',
      ),
      'PB4' => 
      array (
        'desc' => 'port B',
      ),
      'PB5' => 
      array (
        'desc' => 'port B',
      ),
      'PB6' => 
      array (
        'desc' => 'port B',
      ),
      'PB7' => 
      array (
        'desc' => 'port B',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'D7' => 
      array (
        'desc' => 'data bus',
      ),
      'D6' => 
      array (
        'desc' => 'data bus',
      ),
      'D5' => 
      array (
        'desc' => 'data bus',
      ),
      'D4' => 
      array (
        'desc' => 'data bus',
      ),
      'D3' => 
      array (
        'desc' => 'data bus',
      ),
      'D2' => 
      array (
        'desc' => 'data bus',
      ),
      'D1' => 
      array (
        'desc' => 'data bus',
      ),
      'D0' => 
      array (
        'desc' => 'data bus',
      ),
      'RESET' => 
      array (
        'desc' => 'reset (active high)',
      ),
      '~WR' => 
      array (
        'desc' => 'write enable (active low)',
      ),
      'PA7' => 
      array (
        'desc' => 'port A',
      ),
      'PA6' => 
      array (
        'desc' => 'port A',
      ),
      'PA5' => 
      array (
        'desc' => 'port A',
      ),
      'PA4' => 
      array (
        'desc' => 'port A',
      ),
    ),
    'notes' => 
    array (
      0 => 'Register 00: read/write port A',
      1 => 'Register 01: read/write port B',
      2 => 'Register 10: read/write port C',
      3 => 'Register 11: read/write control word',
      4 => 'Control word:
<table>
<tr><td>Bit 0</td><td>Port C lower bits; 1=input, 0=output</td></tr>
<tr><td>Bit 1</td><td>Port B; 1=input, 0=output</td></tr>
<tr><td>Bit 2</td><td>Group B mode selection</td></tr>
<tr><td>Bit 3</td><td>Port C upper bits; 1=input, 0=output</td></tr>
<tr><td>Bit 4</td><td>Port A; 1=input, 0=output</td></tr>
<tr><td>Bits 5-6</td><td>Group A mode selection</td></tr>
<tr><td>Bit 7</td><td>1=mode set, 0=bit set/reset</td></tr>
</table><br/>',
      5 => 'When bit 7 of control word is set to 1, the rest of the bits have the following functions:
<table>
<tr><td>Bit 0</td><td>1=set bit, 0=clear bit</td></tr>
<tr><td>Bits 1-3</td><td>specify bit to modify (0-7)</td></tr>
</table>',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'PA3',
        2 => 'PA2',
        3 => 'PA1',
        4 => 'PA0',
        5 => '~RD',
        6 => '~CS',
        7 => 'GND',
        8 => 'A1',
        9 => 'A0',
        10 => 'PC7',
        11 => 'PC6',
        12 => 'PC5',
        13 => 'PC4',
        14 => 'PC0',
        15 => 'PC1',
        16 => 'PC2',
        17 => 'PC3',
        18 => 'PB0',
        19 => 'PB1',
        20 => 'PB2',
        21 => 'PB3',
        22 => 'PB4',
        23 => 'PB5',
        24 => 'PB6',
        25 => 'PB7',
        26 => 'Vcc',
        27 => 'D7',
        28 => 'D6',
        29 => 'D5',
        30 => 'D4',
        31 => 'D3',
        32 => 'D2',
        33 => 'D1',
        34 => 'D0',
        35 => 'RESET',
        36 => '~WR',
        37 => 'PA7',
        38 => 'PA6',
        39 => 'PA5',
        40 => 'PA4',
      ),
    ),
  ),
  'A6278' => 
  array (
    'description' => 'Serial-input constant-current latched LED driver (8 outputs)',
    'family' => 'Allegro',
    'datasheet' => 'http://www.allegromicro.com/en/Products/Part_Numbers/6278/6278.pdf',
    'pins' => 
    array (
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'DATA' => 
      array (
        'desc' => 'serial data in',
      ),
      'CLOCK' => 
      array (
        'desc' => 'clock input (low-to-high triggered)',
      ),
      'LATCH' => 
      array (
        'desc' => 'data strobe input (active high)',
      ),
      'OUT0' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT1' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT2' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT3' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT4' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT5' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT6' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT7' => 
      array (
        'desc' => 'current-sinking output',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'DATA OUT' => 
      array (
        'desc' => 'serial data out, for cascading',
      ),
      'REXT' => 
      array (
        'desc' => 'external resistor to ground (sets output current)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GND',
        2 => 'DATA',
        3 => 'CLOCK',
        4 => 'LATCH',
        5 => 'OUT0',
        6 => 'OUT1',
        7 => 'OUT2',
        8 => 'OUT3',
        9 => 'OUT4',
        10 => 'OUT5',
        11 => 'OUT6',
        12 => 'OUT7',
        13 => '~OE',
        14 => 'DATA OUT',
        15 => 'REXT',
        16 => 'Vcc',
      ),
    ),
  ),
  'A6279' => 
  array (
    'description' => 'Serial-input constant-current latched LED driver (16 outputs)',
    'family' => 'Allegro',
    'datasheet' => 'http://www.allegromicro.com/en/Products/Part_Numbers/6278/6278.pdf',
    'pins' => 
    array (
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'DATA' => 
      array (
        'desc' => 'serial data in',
      ),
      'CLOCK' => 
      array (
        'desc' => 'clock input (low-to-high triggered)',
      ),
      'LATCH' => 
      array (
        'desc' => 'data strobe input (active high)',
      ),
      'OUT0' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT1' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT2' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT3' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT4' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT5' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT6' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT7' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT8' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT9' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT10' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT11' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT12' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT13' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT14' => 
      array (
        'desc' => 'current-sinking output',
      ),
      'OUT15' => 
      array (
        'desc' => 'current-sinking output',
      ),
      '~OE' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'DATA OUT' => 
      array (
        'desc' => 'serial data out, for cascading',
      ),
      'REXT' => 
      array (
        'desc' => 'external resistor to ground (sets output current)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GND',
        2 => 'DATA',
        3 => 'CLOCK',
        4 => 'LATCH',
        5 => 'OUT0',
        6 => 'OUT1',
        7 => 'OUT2',
        8 => 'OUT3',
        9 => 'OUT4',
        10 => 'OUT5',
        11 => 'OUT6',
        12 => 'OUT7',
        13 => 'OUT8',
        14 => 'OUT9',
        15 => 'OUT10',
        16 => 'OUT11',
        17 => 'OUT12',
        18 => 'OUT13',
        19 => 'OUT14',
        20 => 'OUT15',
        21 => '~OE',
        22 => 'DATA OUT',
        23 => 'REXT',
        24 => 'Vcc',
      ),
    ),
  ),
  'AD7528' => 
  array (
    'description' => 'CMOS dual 8-bit buffered multiplying DAC',
    'aliases' => 
    array (
      0 => 'TLC7528',
    ),
    'family' => 'Analog Devices',
    'datasheet' => 'http://www.analog.com/static/imported-files/data_sheets/AD7528.pdf',
    'pins' => 
    array (
      'AGND' => 
      array (
        'desc' => 'analog ground',
      ),
      'OUT A' => 
      array (
        'desc' => 'analog current output',
      ),
      'R__FB A' => 
      array (
        'desc' => 'feedback resistor connection',
      ),
      'V__REF A' => 
      array (
        'desc' => 'input reference voltage',
      ),
      'DGND' => 
      array (
        'desc' => 'digital ground',
      ),
      '~DACA/DACB' => 
      array (
        'desc' => 'DAC select',
      ),
      '(MSB) DB7' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB6' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB5' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB4' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB3' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB0 (LSB)' => 
      array (
        'desc' => 'parallel data input',
      ),
      '~CS' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      '~WR' => 
      array (
        'desc' => 'write to data register (active low)',
      ),
      'V__DD' => 
      array (
        'desc' => 'supply voltage',
      ),
      'V__REF B' => 
      array (
        'desc' => 'input reference voltage',
      ),
      'R__FB B' => 
      array (
        'desc' => 'feedback resistor connection',
      ),
      'OUT B' => 
      array (
        'desc' => 'analog current output',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Settling time, V__DD = 5V',
        'val' => 
        array (
          0 => '400 (AD7528)',
          1 => '100 (TLC7528)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Update rate, V__DD = 5V',
        'val' => 
        array (
          0 => '2.5 (AD7528)',
          1 => '10 (TLC7528)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'AGND',
        2 => 'OUT A',
        3 => 'R__FB A',
        4 => 'V__REF A',
        5 => 'DGND',
        6 => '~DACA/DACB',
        7 => '(MSB) DB7',
        8 => 'DB6',
        9 => 'DB5',
        10 => 'DB4',
        11 => 'DB3',
        12 => 'DB2',
        13 => 'DB1',
        14 => 'DB0 (LSB)',
        15 => '~CS',
        16 => '~WR',
        17 => 'V__DD',
        18 => 'V__REF B',
        19 => 'R__FB B',
        20 => 'OUT B',
      ),
    ),
  ),
  'AD7805' => 
  array (
    'description' => '+3.3V to +5V quad 10-bit DAC',
    'family' => 'Analog Devices',
    'datasheet' => 'http://www.analog.com/static/imported-files/data_sheets/AD7804_7805_7808_7809.pdf',
    'pins' => 
    array (
      'AGND' => 
      array (
        'desc' => 'analog ground',
      ),
      'V__OUT B' => 
      array (
        'desc' => 'analog output voltage',
      ),
      'V__OUT A' => 
      array (
        'desc' => 'analog output voltage',
      ),
      'REFOUT' => 
      array (
        'desc' => 'reference output (typically 1.23V)',
      ),
      'DB9' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB8' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB7' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB6' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB5' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB4' => 
      array (
        'desc' => 'parallel data input',
      ),
      '~LDAC' => 
      array (
        'desc' => 'DAC register update (active low)',
      ),
      'DB3' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB2' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DGND' => 
      array (
        'desc' => 'digital ground',
      ),
      'DV__DD' => 
      array (
        'desc' => 'digital power supply',
      ),
      '~WR' => 
      array (
        'desc' => 'write to data register (active low)',
      ),
      '~CS' => 
      array (
        'desc' => 'chip select (active low)',
      ),
      '~CLR' => 
      array (
        'desc' => 'asynchronous clear (active low)',
      ),
      'DB1' => 
      array (
        'desc' => 'parallel data input',
      ),
      'DB0' => 
      array (
        'desc' => 'parallel data input',
      ),
      'A1' => 
      array (
        'desc' => 'DAC address input',
      ),
      'A0' => 
      array (
        'desc' => 'DAC address input',
      ),
      'MODE' => 
      array (
        'desc' => 'mode input',
      ),
      'REFIN' => 
      array (
        'desc' => 'external reference input',
      ),
      'COMP' => 
      array (
        'desc' => 'compensation pin',
      ),
      'V__OUT D' => 
      array (
        'desc' => 'analog output voltge',
      ),
      'V__OUT C' => 
      array (
        'desc' => 'analog output voltage',
      ),
      'AV__DD' => 
      array (
        'desc' => 'analog power supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Slew rate',
        'val' => '2.5',
        'unit' => 'V/µs',
      ),
      1 => 
      array (
        'param' => 'Settling time',
        'val' => '1.5',
        'unit' => 'µs',
      ),
      2 => 
      array (
        'param' => 'Update rate',
        'val' => '667',
        'unit' => 'kHz',
      ),
      3 => 
      array (
        'param' => 'Output voltage range, twos complement coding',
        'val' => 'Vbias ± 15/16*Vbias',
        'units' => 'V',
      ),
      4 => 
      array (
        'param' => 'Output voltage range, offset binary coding',
        'val' => 'Vbias/16 to 31/16*Vbias',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'AGND',
        2 => 'V__OUT B',
        3 => 'V__OUT A',
        4 => 'REFOUT',
        5 => 'DB9',
        6 => 'DB8',
        7 => 'DB7',
        8 => 'DB6',
        9 => 'DB5',
        10 => 'DB4',
        11 => '~LDAC',
        12 => 'DB3',
        13 => 'DB2',
        14 => 'DGND',
        15 => 'DV__DD',
        16 => '~WR',
        17 => '~CS',
        18 => '~CLR',
        19 => 'DB1',
        20 => 'DB0',
        21 => 'A1',
        22 => 'A0',
        23 => 'MODE',
        24 => 'REFIN',
        25 => 'COMP',
        26 => 'V__OUT D',
        27 => 'V__OUT C',
        28 => 'AV__DD',
      ),
    ),
  ),
  'ADC0808' => 
  array (
    'description' => '8-bit A/D converter with 8-channel multiplexer',
    'aliases' => 
    array (
      0 => 'ADC0809',
    ),
    'family' => 'National Semiconductor',
    'datasheet' => 'http://www.national.com/ds/DC/ADC0808.pdf',
    'pins' => 
    array (
      'IN3' => 
      array (
        'desc' => 'analog input 3',
      ),
      'IN4' => 
      array (
        'desc' => 'analog input 4',
      ),
      'IN5' => 
      array (
        'desc' => 'analog input 5',
      ),
      'IN6' => 
      array (
        'desc' => 'analog input 6',
      ),
      'IN7' => 
      array (
        'desc' => 'analog input 7',
      ),
      'START' => 
      array (
        'desc' => 'start conversion (active high)',
      ),
      'EOC' => 
      array (
        'desc' => 'end of conversion (active high)',
      ),
      'D3' => 
      array (
        'desc' => 'data bus',
      ),
      'OUTPUT ENABLE' => 
      array (
        'desc' => 'data output enable',
      ),
      'CLOCK' => 
      array (
        'desc' => 'clock input',
      ),
      'V__CC' => 
      array (
        'desc' => 'supply voltage',
      ),
      'V__REF(+)' => 
      array (
        'desc' => 'positive voltage reference',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'D1' => 
      array (
        'desc' => 'data bus',
      ),
      'D2' => 
      array (
        'desc' => 'data bus',
      ),
      'V__REF(-)' => 
      array (
        'desc' => 'negative voltage reference',
      ),
      'D0' => 
      array (
        'desc' => 'data bus (LSB)',
      ),
      'D4' => 
      array (
        'desc' => 'data bus',
      ),
      'D5' => 
      array (
        'desc' => 'data bus',
      ),
      'D6' => 
      array (
        'desc' => 'data bus',
      ),
      'D7' => 
      array (
        'desc' => 'data bus (MSB)',
      ),
      'ALE' => 
      array (
        'desc' => 'address latch enable (positive-edge trigger)',
      ),
      'A2' => 
      array (
        'desc' => 'channel select (MSB)',
      ),
      'A1' => 
      array (
        'desc' => 'channel select',
      ),
      'A0' => 
      array (
        'desc' => 'channel select (LSB)',
      ),
      'IN0' => 
      array (
        'desc' => 'analog channel 0',
      ),
      'IN1' => 
      array (
        'desc' => 'analog channel 1',
      ),
      'IN2' => 
      array (
        'desc' => 'analog channel 2',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage V__CC',
        'val' => '5',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Total unadjusted error',
        'val' => 
        array (
          0 => '±1/2 (ADC0808)',
          1 => '±1 (ADC0809)',
        ),
        'unit' => 'LSB',
      ),
      2 => 
      array (
        'param' => 'Input resistance, V__REF(+) to V__REF(-)',
        'val' => '2.5',
        'unit' => 'kΩ',
      ),
      3 => 
      array (
        'param' => 'Analog input voltage range',
        'val' => 
        array (
          0 => 'GND-0.10 (min)',
          1 => 'Vcc+0.10 (max)',
        ),
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Minimum START pulse width',
        'val' => '100',
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Minimum ALE pulse width',
        'val' => '100',
        'unit' => 'ns',
      ),
      6 => 
      array (
        'param' => 'Analog mux delay time from ALE',
        'val' => '1',
        'unit' => 'µs',
      ),
      7 => 
      array (
        'param' => 'Conversion time (640 kHz clock frequency)',
        'val' => '100',
        'unit' => 'µs',
      ),
      8 => 
      array (
        'param' => 'Clock frequency',
        'val' => 
        array (
          0 => '10 (min)',
          1 => '640 (typical)',
          2 => '1280 (max)',
        ),
        'unit' => 'kHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'The ADC0808 is a more accurate version of the ADC0809.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'IN3',
        2 => 'IN4',
        3 => 'IN5',
        4 => 'IN6',
        5 => 'IN7',
        6 => 'START',
        7 => 'EOC',
        8 => 'D3',
        9 => 'OUTPUT ENABLE',
        10 => 'CLOCK',
        11 => 'V__CC',
        12 => 'V__REF(+)',
        13 => 'GND',
        14 => 'D1',
        15 => 'D2',
        16 => 'V__REF(-)',
        17 => 'D0',
        18 => 'D4',
        19 => 'D5',
        20 => 'D6',
        21 => 'D7',
        22 => 'ALE',
        23 => 'A2',
        24 => 'A1',
        25 => 'A0',
        26 => 'IN0',
        27 => 'IN1',
        28 => 'IN2',
      ),
    ),
  ),
  'ATMEGA168' => 
  array (
    'name' => 'ATmega168',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATmega48',
      1 => 'ATmega88',
      2 => 'ATmega328P',
    ),
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc2545.pdf',
    'pins' => 
    array (
      '(PCINT14/~RESET) PC6' => 
      array (
        'desc' => 'reset (active low); port C',
      ),
      '(PCINT16/RXD) PD0' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT17/TXD) PD1' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT18/INT0) PD2' => 
      array (
        'desc' => 'external interrupt 0; port D',
      ),
      '(PCINT19/OC2B/INT1) PD3' => 
      array (
        'desc' => 'external interrupt 1; port D',
      ),
      '(PCINT20/XCK/T0) PD4' => 
      array (
        'desc' => 'port D',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '(PCINT6/XTAL1/TOSC1) PB6' => 
      array (
        'desc' => 'clock oscillator pin 1; port B',
      ),
      '(PCINT17/XTAL2/TOSC2) PB7' => 
      array (
        'desc' => 'clock oscillator pin 2; port B',
      ),
      '(PCINT21/OC0B/T1) PD5' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT22/OC0A/AIN0) PD6' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT23/AIN1) PD7' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT0/CLKO/ICP1) PB0' => 
      array (
        'desc' => 'clock output; port B',
      ),
      'PB1 (OC1A/PCINT1)' => 
      array (
        'desc' => 'port B',
      ),
      'PB2 (~SS/OC1B/PCINT2)' => 
      array (
        'desc' => 'SPI slave select; port B',
      ),
      'PB3 (MOSI/OC2A/PCINT3)' => 
      array (
        'desc' => 'SPI master output/slave input; port B',
      ),
      'PB4 (MISO/PCINT4)' => 
      array (
        'desc' => 'SPI master input/slave output; port B',
      ),
      'PB5 (SCK/PCINT5)' => 
      array (
        'desc' => 'SPI master clock; port B',
      ),
      'AVcc' => 
      array (
        'desc' => 'A/D converter supply voltage',
      ),
      'AREF' => 
      array (
        'desc' => 'analog reference for A/D converter',
      ),
      'PC0 (ADC0/PCINT8)' => 
      array (
        'desc' => 'port C',
      ),
      'PC1 (ADC1/PCINT9)' => 
      array (
        'desc' => 'port C',
      ),
      'PC2 (ADC2/PCINT10)' => 
      array (
        'desc' => 'port C',
      ),
      'PC3 (ADC3/PCINT11)' => 
      array (
        'desc' => 'port C',
      ),
      'PC4 (ADC4/SDA/PCINT12)' => 
      array (
        'desc' => 'I2C Data pin; port C',
      ),
      'PC5 (ADC5/SCL/PCINT13)' => 
      array (
        'desc' => 'I2C Clock pin; port C',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '4K (ATmega48)',
          1 => '8K (ATmega88)',
          2 => '16K (ATmega168)',
          3 => '32K (ATmega328P)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '512 (ATmega48)',
          1 => '1K (ATmega88)',
          2 => '1K (ATmega168)',
          3 => '2K (ATmega328P)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '256 (ATmega48)',
          1 => '512 (ATmega88)',
          2 => '512 (ATmega168)',
          3 => '1K (ATmega328P)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '23',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '20',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '(PCINT14/~RESET) PC6',
        2 => '(PCINT16/RXD) PD0',
        3 => '(PCINT17/TXD) PD1',
        4 => '(PCINT18/INT0) PD2',
        5 => '(PCINT19/OC2B/INT1) PD3',
        6 => '(PCINT20/XCK/T0) PD4',
        7 => 'Vcc',
        8 => 'GND',
        9 => '(PCINT6/XTAL1/TOSC1) PB6',
        10 => '(PCINT17/XTAL2/TOSC2) PB7',
        11 => '(PCINT21/OC0B/T1) PD5',
        12 => '(PCINT22/OC0A/AIN0) PD6',
        13 => '(PCINT23/AIN1) PD7',
        14 => '(PCINT0/CLKO/ICP1) PB0',
        15 => 'PB1 (OC1A/PCINT1)',
        16 => 'PB2 (~SS/OC1B/PCINT2)',
        17 => 'PB3 (MOSI/OC2A/PCINT3)',
        18 => 'PB4 (MISO/PCINT4)',
        19 => 'PB5 (SCK/PCINT5)',
        20 => 'AVcc',
        21 => 'AREF',
        22 => 'GND',
        23 => 'PC0 (ADC0/PCINT8)',
        24 => 'PC1 (ADC1/PCINT9)',
        25 => 'PC2 (ADC2/PCINT10)',
        26 => 'PC3 (ADC3/PCINT11)',
        27 => 'PC4 (ADC4/SDA/PCINT12)',
        28 => 'PC5 (ADC5/SCL/PCINT13)',
      ),
    ),
  ),
  'ATMEGA32' => 
  array (
    'name' => 'ATmega32',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATmega16',
    ),
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc8155.pdf',
    'pins' => 
    array (
      '(XCK0/T0) PB0' => 
      array (
        'desc' => 'port B',
      ),
      '(T1) PB1' => 
      array (
        'desc' => 'port B',
      ),
      '(INT2/AIN0) PB2' => 
      array (
        'desc' => 'external interrupt 2; port B',
      ),
      '(OC0/AIN1) PB3' => 
      array (
        'desc' => 'port B',
      ),
      '(~SS~) PB4' => 
      array (
        'desc' => 'SPI slave select; port B',
      ),
      '(MOSI) PB5' => 
      array (
        'desc' => 'SPI master output/slave input; port B',
      ),
      '(MISO) PB6' => 
      array (
        'desc' => 'SPI master input/slave output; port B',
      ),
      '(SCK) PB7' => 
      array (
        'desc' => 'SPI master clock; port B',
      ),
      '~RESET' => 
      array (
        'desc' => 'reset (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'XTAL2' => 
      array (
        'desc' => 'clock oscillator pin 2',
      ),
      'XTAL1' => 
      array (
        'desc' => 'clock oscillator pin 1',
      ),
      '(RXD) PD0' => 
      array (
        'desc' => 'UART receive; port D',
      ),
      '(TXD) PD1' => 
      array (
        'desc' => 'UART transmit; port D',
      ),
      '(INT0) PD2' => 
      array (
        'desc' => 'external interrupt 0; port D',
      ),
      '(INT1) PD3' => 
      array (
        'desc' => 'external interrupt 1; port D',
      ),
      '(OC1B) PD4' => 
      array (
        'desc' => 'port D',
      ),
      '(OC1A) PD5' => 
      array (
        'desc' => 'port D',
      ),
      '(ICP1) PD6' => 
      array (
        'desc' => 'port D',
      ),
      'PD7 (OC2)' => 
      array (
        'desc' => 'port D',
      ),
      'PC0 (SCL)' => 
      array (
        'desc' => '2-wire clock line; port C',
      ),
      'PC1 (SDA)' => 
      array (
        'desc' => '2-wire data line; port C',
      ),
      'PC2 (TCK)' => 
      array (
        'desc' => 'JTAG test clock; port C',
      ),
      'PC3 (TMS)' => 
      array (
        'desc' => 'JTAG test mode select; port C',
      ),
      'PC4 (TDO)' => 
      array (
        'desc' => 'JTAG test data output; port C',
      ),
      'PC5 (TDI)' => 
      array (
        'desc' => 'JTAG test data input; port C',
      ),
      'PC6 (TOSC1)' => 
      array (
        'desc' => 'timer oscillator pin 1; port C',
      ),
      'PC7 (TOSC2)' => 
      array (
        'desc' => 'timer oscillator pin 2; port C',
      ),
      'AVcc' => 
      array (
        'desc' => 'A/D converter supply voltage',
      ),
      'AREF' => 
      array (
        'desc' => 'analog reference for A/D converter',
      ),
      'PA7 (ADC7)' => 
      array (
        'desc' => 'port A',
      ),
      'PA6 (ADC6)' => 
      array (
        'desc' => 'port A',
      ),
      'PA5 (ADC5)' => 
      array (
        'desc' => 'port A',
      ),
      'PA4 (ADC4)' => 
      array (
        'desc' => 'port A',
      ),
      'PA3 (ADC3)' => 
      array (
        'desc' => 'port A',
      ),
      'PA2 (ADC2)' => 
      array (
        'desc' => 'port A',
      ),
      'PA1 (ADC1)' => 
      array (
        'desc' => 'port A',
      ),
      'PA0 (ADC0)' => 
      array (
        'desc' => 'port A',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '16K (ATmega16)',
          1 => '32K (ATmega32)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '1K (ATmega16)',
          1 => '2K (ATmega32)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '512 (ATmega16)',
          1 => '1K (ATmega32)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '32',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '(XCK0/T0) PB0',
        2 => '(T1) PB1',
        3 => '(INT2/AIN0) PB2',
        4 => '(OC0/AIN1) PB3',
        5 => '(~SS~) PB4',
        6 => '(MOSI) PB5',
        7 => '(MISO) PB6',
        8 => '(SCK) PB7',
        9 => '~RESET',
        10 => 'Vcc',
        11 => 'GND',
        12 => 'XTAL2',
        13 => 'XTAL1',
        14 => '(RXD) PD0',
        15 => '(TXD) PD1',
        16 => '(INT0) PD2',
        17 => '(INT1) PD3',
        18 => '(OC1B) PD4',
        19 => '(OC1A) PD5',
        20 => '(ICP1) PD6',
        21 => 'PD7 (OC2)',
        22 => 'PC0 (SCL)',
        23 => 'PC1 (SDA)',
        24 => 'PC2 (TCK)',
        25 => 'PC3 (TMS)',
        26 => 'PC4 (TDO)',
        27 => 'PC5 (TDI)',
        28 => 'PC6 (TOSC1)',
        29 => 'PC7 (TOSC2)',
        30 => 'AVcc',
        31 => 'GND',
        32 => 'AREF',
        33 => 'PA7 (ADC7)',
        34 => 'PA6 (ADC6)',
        35 => 'PA5 (ADC5)',
        36 => 'PA4 (ADC4)',
        37 => 'PA3 (ADC3)',
        38 => 'PA2 (ADC2)',
        39 => 'PA1 (ADC1)',
        40 => 'PA0 (ADC0)',
      ),
    ),
  ),
  'ATMEGA644P' => 
  array (
    'name' => 'ATmega644P',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATmega164P',
      1 => 'ATmega324P',
      2 => 'ATmega1284P',
    ),
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc8011.pdf',
    'pins' => 
    array (
      '(PCINT8/XCK0/T0) PB0' => 
      array (
        'desc' => 'port B',
      ),
      '(PCINT9/CLKO/T1) PB1' => 
      array (
        'desc' => 'clock output; port B',
      ),
      '(PCINT10/INT2/AIN0) PB2' => 
      array (
        'desc' => 'external interrupt 2; port B',
      ),
      '(PCINT11/OC0A/AIN1) PB3' => 
      array (
        'desc' => 'port B',
      ),
      '(PCINT12/OC0B/~SS~) PB4' => 
      array (
        'desc' => 'SPI slave select; port B',
      ),
      '(PCINT13/ICP3*/MOSI) PB5' => 
      array (
        'desc' => 'SPI master output/slave input; port B',
      ),
      '(PCINT14/OC3A*/MISO) PB6' => 
      array (
        'desc' => 'SPI master input/slave output; port B',
      ),
      '(PCINT15/OC3B*/SCK) PB7' => 
      array (
        'desc' => 'SPI master clock; port B',
      ),
      '~RESET' => 
      array (
        'desc' => 'reset (active low)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'XTAL2' => 
      array (
        'desc' => 'clock oscillator pin 2',
      ),
      'XTAL1' => 
      array (
        'desc' => 'clock oscillator pin 1',
      ),
      '(PCINT24/RXD0) PD0' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT25/TXD0) PD1' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT26/RXD1/INT0) PD2' => 
      array (
        'desc' => 'external interrupt 0; port D',
      ),
      '(PCINT27/TXD1/INT1) PD3' => 
      array (
        'desc' => 'external interrupt 1; port D',
      ),
      '(PCINT28/XCK1/OC1B) PD4' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT29/OC1A) PD5' => 
      array (
        'desc' => 'port D',
      ),
      '(PCINT30/OC2B/ICP) PD6' => 
      array (
        'desc' => 'port D',
      ),
      'PD7 (OC2A/PCINT31)' => 
      array (
        'desc' => 'port D',
      ),
      'PC0 (SCL/PCINT16)' => 
      array (
        'desc' => '2-wire clock line; port C',
      ),
      'PC1 (SDA/PCINT17)' => 
      array (
        'desc' => '2-wire data line; port C',
      ),
      'PC2 (TCK/PCINT18)' => 
      array (
        'desc' => 'JTAG test clock; port C',
      ),
      'PC3 (TMS/PCINT19)' => 
      array (
        'desc' => 'JTAG test mode select; port C',
      ),
      'PC4 (TDO/PCINT20)' => 
      array (
        'desc' => 'JTAG test data output; port C',
      ),
      'PC5 (TDI/PCINT21)' => 
      array (
        'desc' => 'JTAG test data input; port C',
      ),
      'PC6 (TOSC1/PCINT22)' => 
      array (
        'desc' => 'timer oscillator pin 1; port C',
      ),
      'PC7 (TOSC2/PCINT23)' => 
      array (
        'desc' => 'timer oscillator pin 2; port C',
      ),
      'AVcc' => 
      array (
        'desc' => 'A/D converter supply voltage',
      ),
      'AREF' => 
      array (
        'desc' => 'analog reference for A/D converter',
      ),
      'PA7 (ADC7/PCINT7)' => 
      array (
        'desc' => 'port A',
      ),
      'PA6 (ADC6/PCINT6)' => 
      array (
        'desc' => 'port A',
      ),
      'PA5 (ADC5/PCINT5)' => 
      array (
        'desc' => 'port A',
      ),
      'PA4 (ADC4/PCINT4)' => 
      array (
        'desc' => 'port A',
      ),
      'PA3 (ADC3/PCINT3)' => 
      array (
        'desc' => 'port A',
      ),
      'PA2 (ADC2/PCINT2)' => 
      array (
        'desc' => 'port A',
      ),
      'PA1 (ADC1/PCINT1)' => 
      array (
        'desc' => 'port A',
      ),
      'PA0 (ADC0/PCINT0)' => 
      array (
        'desc' => 'port A',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '16K (ATmega164P)',
          1 => '32K (ATmega324P)',
          2 => '64K (ATmega644P)',
          3 => '128K (ATmega1284P)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '1K (ATmega164P)',
          1 => '2K (ATmega324P)',
          2 => '4K (ATmega644P)',
          3 => '16K (ATmega1284P)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '512 (ATmega164P)',
          1 => '1K (ATmega324P)',
          2 => '2K (ATmega644P)',
          3 => '4K (ATmega1284P)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '32',
      ),
    ),
    'notes' => 
    array (
      0 => 'ICP3, OC3A, OC3B present on ATmega1284P only',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '(PCINT8/XCK0/T0) PB0',
        2 => '(PCINT9/CLKO/T1) PB1',
        3 => '(PCINT10/INT2/AIN0) PB2',
        4 => '(PCINT11/OC0A/AIN1) PB3',
        5 => '(PCINT12/OC0B/~SS~) PB4',
        6 => '(PCINT13/ICP3*/MOSI) PB5',
        7 => '(PCINT14/OC3A*/MISO) PB6',
        8 => '(PCINT15/OC3B*/SCK) PB7',
        9 => '~RESET',
        10 => 'Vcc',
        11 => 'GND',
        12 => 'XTAL2',
        13 => 'XTAL1',
        14 => '(PCINT24/RXD0) PD0',
        15 => '(PCINT25/TXD0) PD1',
        16 => '(PCINT26/RXD1/INT0) PD2',
        17 => '(PCINT27/TXD1/INT1) PD3',
        18 => '(PCINT28/XCK1/OC1B) PD4',
        19 => '(PCINT29/OC1A) PD5',
        20 => '(PCINT30/OC2B/ICP) PD6',
        21 => 'PD7 (OC2A/PCINT31)',
        22 => 'PC0 (SCL/PCINT16)',
        23 => 'PC1 (SDA/PCINT17)',
        24 => 'PC2 (TCK/PCINT18)',
        25 => 'PC3 (TMS/PCINT19)',
        26 => 'PC4 (TDO/PCINT20)',
        27 => 'PC5 (TDI/PCINT21)',
        28 => 'PC6 (TOSC1/PCINT22)',
        29 => 'PC7 (TOSC2/PCINT23)',
        30 => 'AVcc',
        31 => 'GND',
        32 => 'AREF',
        33 => 'PA7 (ADC7/PCINT7)',
        34 => 'PA6 (ADC6/PCINT6)',
        35 => 'PA5 (ADC5/PCINT5)',
        36 => 'PA4 (ADC4/PCINT4)',
        37 => 'PA3 (ADC3/PCINT3)',
        38 => 'PA2 (ADC2/PCINT2)',
        39 => 'PA1 (ADC1/PCINT1)',
        40 => 'PA0 (ADC0/PCINT0)',
      ),
    ),
  ),
  'ATMEGA8' => 
  array (
    'name' => 'ATmega8',
    'description' => '8-bit AVR® microcontroller',
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc2486.pdf',
    'pins' => 
    array (
      '(~RESET) PC6' => 
      array (
        'desc' => 'reset (active low); port C',
      ),
      '(RXD) PD0' => 
      array (
        'desc' => 'UART receive; port D',
      ),
      '(TXD) PD1' => 
      array (
        'desc' => 'UART transmit; port D',
      ),
      '(INT0) PD2' => 
      array (
        'desc' => 'external interrupt 0; port D',
      ),
      '(INT1) PD3' => 
      array (
        'desc' => 'external interrupt 1; port D',
      ),
      '(XCK/T0) PD4' => 
      array (
        'desc' => 'port D',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '(XTAL1/TOSC1) PB6' => 
      array (
        'desc' => 'clock oscillator pin 1; port B',
      ),
      '(XTAL2/TOSC2) PB7' => 
      array (
        'desc' => 'clock oscillator pin 2; port B',
      ),
      '(T1) PD5' => 
      array (
        'desc' => 'port D',
      ),
      '(AIN0) PD6' => 
      array (
        'desc' => 'port D',
      ),
      '(AIN1) PD7' => 
      array (
        'desc' => 'port D',
      ),
      '(ICP1) PB0' => 
      array (
        'desc' => 'port B',
      ),
      'PB1 (OC1A)' => 
      array (
        'desc' => 'port B',
      ),
      'PB2 (SS/OC1B)' => 
      array (
        'desc' => 'SPI slave select; port B',
      ),
      'PB3 (MOSI/OC2)' => 
      array (
        'desc' => 'SPI master output/slave input; port B',
      ),
      'PB4 (MISO)' => 
      array (
        'desc' => 'SPI master input/slave output; port B',
      ),
      'PB5 (SCK)' => 
      array (
        'desc' => 'SPI master clock; port B',
      ),
      'AVcc' => 
      array (
        'desc' => 'A/D converter supply voltage',
      ),
      'AREF' => 
      array (
        'desc' => 'analog reference for A/D converter',
      ),
      'PC0 (ADC0)' => 
      array (
        'desc' => 'port C',
      ),
      'PC1 (ADC1)' => 
      array (
        'desc' => 'port C',
      ),
      'PC2 (ADC2)' => 
      array (
        'desc' => 'port C',
      ),
      'PC3 (ADC3)' => 
      array (
        'desc' => 'port C',
      ),
      'PC4 (ADC4/SCL)' => 
      array (
        'desc' => '2-wire clock; port C',
      ),
      'PC5 (ADC5/SDA)' => 
      array (
        'desc' => '2-wire data; port C',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => '8K',
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => '1K',
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => '512',
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '23',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '16',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '(~RESET) PC6',
        2 => '(RXD) PD0',
        3 => '(TXD) PD1',
        4 => '(INT0) PD2',
        5 => '(INT1) PD3',
        6 => '(XCK/T0) PD4',
        7 => 'Vcc',
        8 => 'GND',
        9 => '(XTAL1/TOSC1) PB6',
        10 => '(XTAL2/TOSC2) PB7',
        11 => '(T1) PD5',
        12 => '(AIN0) PD6',
        13 => '(AIN1) PD7',
        14 => '(ICP1) PB0',
        15 => 'PB1 (OC1A)',
        16 => 'PB2 (SS/OC1B)',
        17 => 'PB3 (MOSI/OC2)',
        18 => 'PB4 (MISO)',
        19 => 'PB5 (SCK)',
        20 => 'AVcc',
        21 => 'AREF',
        22 => 'GND',
        23 => 'PC0 (ADC0)',
        24 => 'PC1 (ADC1)',
        25 => 'PC2 (ADC2)',
        26 => 'PC3 (ADC3)',
        27 => 'PC4 (ADC4/SCL)',
        28 => 'PC5 (ADC5/SDA)',
      ),
    ),
  ),
  'ATTINY12' => 
  array (
    'name' => 'ATTiny12',
    'description' => '8-Bit AVR® microcontroller with 1 kb In-system programmable flash memory',
    'aliases' => 
    array (
      0 => 'ATTiny12V-1',
      1 => 'ATTiny12L-4',
      2 => 'ATTiny12-8',
    ),
    'family' => 'atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc1006.pdf',
    'pins' => 
    array (
      'PB5 / ~RESET~' => 
      array (
        'desc' => 'PB5 / chip reset (active low)',
      ),
      'PB3 / XTAL1' => 
      array (
        'desc' => 'PB3 / Inverting oscillator amplifier input',
      ),
      'PB4 / XTAL2' => 
      array (
        'desc' => 'PB4 / Inverting oscillator amplifier output',
      ),
      'GND' => 
      array (
        'desc' => 'Ground',
      ),
      'PB0 / AIN0 / MOSI' => 
      array (
        'desc' => 'PB0 / Analog comparator positive input / Serial programming input',
      ),
      'PB1 / INT0 / AIN1 / MISO' => 
      array (
        'desc' => 'PB1 / External interrupt 0 / Analog comparator negative input / Serial programming input',
      ),
      'PB2 / T0 / SCK' => 
      array (
        'desc' => 'PB2 / Timer/Counter 0 external counter input / Serial clock',
      ),
      'V__CC' => 
      array (
        'desc' => 'Supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash program memory',
        'val' => '1',
        'unit' => 'kb',
      ),
      1 => 
      array (
        'param' => 'EEPROM memory',
        'val' => '64',
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'Operating voltage',
        'val' => 
        array (
          0 => '1.8-5.5 (ATTiny12V-1)',
          1 => '2.7-5.5 (ATTiny12L-4)',
          2 => '4.0-5.5 (ATTiny12-8)',
        ),
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Speed grade',
        'val' => 
        array (
          0 => '0-1.2 (ATTiny12V-1)',
          1 => '0-4 (ATTiny12L-4)',
          2 => '0-8 (ATTiny12-8)',
        ),
        'unit' => 'MHz',
      ),
      4 => 
      array (
        'param' => 'Active power consumption (at 4 MHz, 3V)',
        'val' => '2.2',
        'unit' => 'mA',
      ),
      5 => 
      array (
        'param' => 'Idle mode power consumption (at 4 MHz, 3V)',
        'val' => '0.5',
        'unit' => 'mA',
      ),
      6 => 
      array (
        'param' => 'Power-down mode power consumption (at 4 MHz, 3V)',
        'val' => '< 1',
        'unit' => 'µA',
      ),
    ),
    'notes' => 
    array (
      0 => 'Also availablle in SOIC package (same pinout)',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'PB5 / ~RESET~',
        2 => 'PB3 / XTAL1',
        3 => 'PB4 / XTAL2',
        4 => 'GND',
        5 => 'PB0 / AIN0 / MOSI',
        6 => 'PB1 / INT0 / AIN1 / MISO',
        7 => 'PB2 / T0 / SCK',
        8 => 'V__CC',
      ),
    ),
  ),
  'ATTINY13' => 
  array (
    'name' => 'ATtiny13',
    'description' => '8-bit AVR® microcontroller',
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc2535.pdf',
    'pins' => 
    array (
      '(PCINT5/~RESET~/ADC0/dW) PB5' => 
      array (
        'desc' => 'reset (active low); port B',
      ),
      '(PCINT3/CLKI/ADC3) PB3' => 
      array (
        'desc' => 'external clock input; port B',
      ),
      '(PCINT4/ADC2) PB4' => 
      array (
        'desc' => 'port B',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'PB0 (MOSI/AIN0/OC0A/PCINT0)' => 
      array (
        'desc' => 'SPI master output/slave input; port B',
      ),
      'PB1 (MISO/AIN1/OC0B/INT0/PCINT1)' => 
      array (
        'desc' => 'SPI master input/slave output; port B',
      ),
      'PB2 (SCK/ADC1/T0/PCINT2)' => 
      array (
        'desc' => 'SPI master clock; port B',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => '1K',
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => '64',
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => '64',
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '6',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '10',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '(PCINT5/~RESET~/ADC0/dW) PB5',
        2 => '(PCINT3/CLKI/ADC3) PB3',
        3 => '(PCINT4/ADC2) PB4',
        4 => 'GND',
        5 => 'PB0 (MOSI/AIN0/OC0A/PCINT0)',
        6 => 'PB1 (MISO/AIN1/OC0B/INT0/PCINT1)',
        7 => 'PB2 (SCK/ADC1/T0/PCINT2)',
        8 => 'Vcc',
      ),
    ),
  ),
  'ATTINY2313' => 
  array (
    'name' => 'ATtiny2313',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATtiny4313',
    ),
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/DOC8246.PDF',
    'pins' => 
    array (
      '(~RESET~/dW) PA2' => 
      array (
        'desc' => 'reset (active low)',
      ),
      '(RXD) PD0' => 
      array (
        'desc' => 'UART receive; port D',
      ),
      '(TXD) PD1' => 
      array (
        'desc' => 'UART transmit; port D',
      ),
      '(XTAL2) PA1' => 
      array (
        'desc' => 'clock oscillator pin 2; port A',
      ),
      '(XTAL1) PA0' => 
      array (
        'desc' => 'clock oscillator pin 1; port A',
      ),
      '(CKOUT/XCK/INT0) PD2' => 
      array (
        'desc' => 'external interrupt 0; clock output; port D',
      ),
      '(INT1) PD3' => 
      array (
        'desc' => 'external interrupt 1; port D',
      ),
      '(T0) PD4' => 
      array (
        'desc' => 'port D',
      ),
      '(OC0B/T1) PD5' => 
      array (
        'desc' => 'port D',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'PD6 (ICP)' => 
      array (
        'desc' => 'port D',
      ),
      'PB0 (AIN0/PCINT0)' => 
      array (
        'desc' => 'port B',
      ),
      'PB1 (AIN1/PCINT1)' => 
      array (
        'desc' => 'port B',
      ),
      'PB2 (OC0A/PCINT2)' => 
      array (
        'desc' => 'port B',
      ),
      'PB3 (OC1A/PCINT3)' => 
      array (
        'desc' => 'port B',
      ),
      'PB4 (OC1B/PCINT4)' => 
      array (
        'desc' => 'port B',
      ),
      'PB5 (MOSI/DI/SDA/PCINT5)' => 
      array (
        'desc' => '3-wire data input; 2-wire data; port B',
      ),
      'PB6 (MISO/DO/PCINT6)' => 
      array (
        'desc' => '3-wire data output; port B',
      ),
      'PB7 (UCSK/SCL/PCINT7)' => 
      array (
        'desc' => '3-wire clock; 2-wire clock; port B',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '2K (ATtiny2313)',
          1 => '4K (ATtiny4313)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '128 (ATtiny2313)',
          1 => '256 (ATtiny4313)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '128 (ATtiny2313)',
          1 => '256 (ATtiny4313)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '18',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '20',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '(~RESET~/dW) PA2',
        2 => '(RXD) PD0',
        3 => '(TXD) PD1',
        4 => '(XTAL2) PA1',
        5 => '(XTAL1) PA0',
        6 => '(CKOUT/XCK/INT0) PD2',
        7 => '(INT1) PD3',
        8 => '(T0) PD4',
        9 => '(OC0B/T1) PD5',
        10 => 'GND',
        11 => 'PD6 (ICP)',
        12 => 'PB0 (AIN0/PCINT0)',
        13 => 'PB1 (AIN1/PCINT1)',
        14 => 'PB2 (OC0A/PCINT2)',
        15 => 'PB3 (OC1A/PCINT3)',
        16 => 'PB4 (OC1B/PCINT4)',
        17 => 'PB5 (MOSI/DI/SDA/PCINT5)',
        18 => 'PB6 (MISO/DO/PCINT6)',
        19 => 'PB7 (UCSK/SCL/PCINT7)',
        20 => 'Vcc',
      ),
    ),
  ),
  'ATTINY85' => 
  array (
    'name' => 'ATtiny85',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATtiny25',
      1 => 'ATtiny45',
    ),
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc2586.pdf',
    'pins' => 
    array (
      '(PCINT5/~RESET~/ADC0/dW) PB5' => 
      array (
        'desc' => 'reset (active low); port B',
      ),
      '(PCINT3/XTAL1/CLKI/~OC1B~/ADC3) PB3' => 
      array (
        'desc' => 'crystal connection; external clock input; port B',
      ),
      '(PCINT4/XTAL2/CLKO/OC1B/ADC2) PB4' => 
      array (
        'desc' => 'crystal connection; clock output; port B',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'PB0 (MOSI/DI/SDA/AIN0/OC0A/~OC1A~/AREF/PCINT0)' => 
      array (
        'desc' => 'SPI master output/slave input; 2-wire data; ADC reference; port B',
      ),
      'PB1 (MISO/DO/AIN1/OC0B/OC1A/PCINT1)' => 
      array (
        'desc' => 'SPI master input/slave output; port B',
      ),
      'PB2 (SCK/USCK/SCL/ADC1/T0/INT0/PCINT2)' => 
      array (
        'desc' => 'SPI master clock; 2-wire clock; external interrupt 0; port B',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '2K (ATtiny25)',
          1 => '4K (ATtiny45)',
          2 => '8K (ATtiny85)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '128 (ATtiny25)',
          1 => '256 (ATtiny45)',
          2 => '512 (ATtiny85)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '128 (ATtiny25)',
          1 => '256 (ATtiny45)',
          2 => '512 (ATtiny85)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '6',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '20',
        'unit' => 'MHz',
      ),
    ),
    'packages' => 
    array (
      'PDIP' => 
      array (
        1 => '(PCINT5/~RESET~/ADC0/dW) PB5',
        2 => '(PCINT3/XTAL1/CLKI/~OC1B~/ADC3) PB3',
        3 => '(PCINT4/XTAL2/CLKO/OC1B/ADC2) PB4',
        4 => 'GND',
        5 => 'PB0 (MOSI/DI/SDA/AIN0/OC0A/~OC1A~/AREF/PCINT0)',
        6 => 'PB1 (MISO/DO/AIN1/OC0B/OC1A/PCINT1)',
        7 => 'PB2 (SCK/USCK/SCL/ADC1/T0/INT0/PCINT2)',
        8 => 'Vcc',
      ),
      'SOIC' => 
      array (
        1 => '(PCINT5/~RESET~/ADC0/dW) PB5',
        2 => '(PCINT3/XTAL1/CLKI/~OC1B~/ADC3) PB3',
        3 => '(PCINT4/XTAL2/CLKO/OC1B/ADC2) PB4',
        4 => 'GND',
        5 => 'PB0 (MOSI/DI/SDA/AIN0/OC0A/~OC1A~/AREF/PCINT0)',
        6 => 'PB1 (MISO/DO/AIN1/OC0B/OC1A/PCINT1)',
        7 => 'PB2 (SCK/USCK/SCL/ADC1/T0/INT0/PCINT2)',
        8 => 'Vcc',
      ),
      'TSSOP' => 
      array (
        1 => '(PCINT5/~RESET~/ADC0/dW) PB5',
        2 => '(PCINT3/XTAL1/CLKI/~OC1B~/ADC3) PB3',
        3 => '(PCINT4/XTAL2/CLKO/OC1B/ADC2) PB4',
        4 => 'GND',
        5 => 'PB0 (MOSI/DI/SDA/AIN0/OC0A/~OC1A~/AREF/PCINT0)',
        6 => 'PB1 (MISO/DO/AIN1/OC0B/OC1A/PCINT1)',
        7 => 'PB2 (SCK/USCK/SCL/ADC1/T0/INT0/PCINT2)',
        8 => 'Vcc',
      ),
      'QFN' => 
      array (
        1 => '(PCINT5/~RESET~/ADC0/dW) PB5',
        2 => '(PCINT3/XTAL1/CLKI/~OC1B~/ADC3) PB3',
        5 => '(PCINT4/XTAL2/CLKO/OC1B/ADC2) PB4',
        8 => 'GND',
        11 => 'PB0 (MOSI/DI/SDA/AIN0/OC0A/~OC1A~/AREF/PCINT0)',
        12 => 'PB1 (MISO/DO/AIN1/OC0B/OC1A/PCINT1)',
        14 => 'PB2 (SCK/USCK/SCL/ADC1/T0/INT0/PCINT2)',
        15 => 'Vcc',
        'BOTTOM_PLATE' => 'GND',
      ),
    ),
  ),
  'AY-3-8910' => 
  array (
    'description' => 'Programmable sound generator',
    'aliases' => 
    array (
      0 => 'YM2149',
    ),
    'family' => 'General Instrument',
    'datasheet' => 'http://www.ym2149.com/ay8910.pdf',
    'pins' => 
    array (
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'ANALOG B' => 
      array (
        'desc' => 'analog output, channel B',
      ),
      'ANALOG A' => 
      array (
        'desc' => 'analog output, channel A',
      ),
      'IOB7' => 
      array (
        'desc' => 'I/O port B',
      ),
      'IOB6' => 
      array (
        'desc' => 'I/O port B',
      ),
      'IOB5' => 
      array (
        'desc' => 'I/O port B',
      ),
      'IOB4' => 
      array (
        'desc' => 'I/O port B',
      ),
      'IOB3' => 
      array (
        'desc' => 'I/O port B',
      ),
      'IOB2' => 
      array (
        'desc' => 'I/O port B',
      ),
      'IOB1' => 
      array (
        'desc' => 'I/O port B',
      ),
      'IOB0' => 
      array (
        'desc' => 'I/O port B',
      ),
      'IOA7' => 
      array (
        'desc' => 'I/O port A',
      ),
      'IOA6' => 
      array (
        'desc' => 'I/O port A',
      ),
      'IOA5' => 
      array (
        'desc' => 'I/O port A',
      ),
      'IOA4' => 
      array (
        'desc' => 'I/O port A',
      ),
      'IOA3' => 
      array (
        'desc' => 'I/O port A',
      ),
      'IOA2' => 
      array (
        'desc' => 'I/O port A',
      ),
      'IOA1' => 
      array (
        'desc' => 'I/O port A',
      ),
      'IOA0' => 
      array (
        'desc' => 'I/O port A',
      ),
      'CLOCK' => 
      array (
        'desc' => 'clock input',
      ),
      '~RESET' => 
      array (
        'desc' => 'master reset (active low)',
      ),
      '~A9' => 
      array (
        'desc' => 'chip select',
      ),
      'A8' => 
      array (
        'desc' => 'chip select',
      ),
      'TEST 2/~SEL' => 
      array (
        'desc' => 'test pin (do not connect)',
      ),
      'BDIR' => 
      array (
        'desc' => 'bus direction',
      ),
      'BC2' => 
      array (
        'desc' => 'bus control',
      ),
      'BC1' => 
      array (
        'desc' => 'bus control',
      ),
      'DA7' => 
      array (
        'desc' => 'data/address bus',
      ),
      'DA6' => 
      array (
        'desc' => 'data/address bus',
      ),
      'DA5' => 
      array (
        'desc' => 'data/address bus',
      ),
      'DA4' => 
      array (
        'desc' => 'data/address bus',
      ),
      'DA3' => 
      array (
        'desc' => 'data/address bus',
      ),
      'DA2' => 
      array (
        'desc' => 'data/address bus',
      ),
      'DA1' => 
      array (
        'desc' => 'data/address bus',
      ),
      'DA0' => 
      array (
        'desc' => 'data/address bus',
      ),
      'ANALOG C' => 
      array (
        'desc' => 'analog output, channel C',
      ),
      'TEST 1' => 
      array (
        'desc' => 'test pin (do not connect)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Minimum clock frequency',
        'val' => '1',
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '2.5 (AY-3-8910)',
          1 => '4 (YM2149)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Chip is only active when ~A9 is low, A8 is high, and address bits DA7-DA4 are low.',
      1 => 'Address bits DA3-DA0 select one of the 16 control registers.',
      2 => 'For YM2149, connecting pin 26 to ground divides CLOCK by 2.',
      3 => 'BDIR=0, BC2=0, BC1=0: inactive, DA7-DA0 high impedance',
      4 => 'BDIR=0, BC2=0, BC1=1: latch address, DA7-DA0 are inputs',
      5 => 'BDIR=0, BC2=1, BC1=0: inactive, DA7-DA0 high impedance',
      6 => 'BDIR=0, BC2=1, BC1=1: read, DA7-DA0 are outputs',
      7 => 'BDIR=1, BC2=0, BC1=0: latch address, DA7-DA0 are inputs',
      8 => 'BDIR=1, BC2=0, BC1=1: inactive, DA7-DA0 high impedance',
      9 => 'BDIR=1, BC2=1, BC1=0: write, DA7-DA0 are inputs',
      10 => 'BDIR=1, BC2=1, BC1=1: latch address, DA7-DA0 are inputs',
      11 => 'Control registers:
<table>
<tr><td>$00</td><td>tone generator A frequency, low 8 bits</td></tr>
<tr><td>$01</td><td>tone generator A frequency, high 4 bits</td></tr>
<tr><td>$02</td><td>tone generator B frequency, low 8 bits</td></tr>
<tr><td>$03</td><td>tone generator B frequency, high 4 bits</td></tr>
<tr><td>$04</td><td>tone generator C frequency, low 8 bits</td></tr>
<tr><td>$05</td><td>tone generator C frequency, high 4 bits</td></tr>
<tr><td>$06</td><td>noise generator frequency, low 5 bits</td></tr>
<tr><td>$07</td><td>I/O port and mixer control</td></tr>
<tr><td>$08</td><td>channel A amplitude/envelope enable</td></tr>
<tr><td>$09</td><td>channel B amplitude/envelope enable</td></tr>
<tr><td>$0A</td><td>channel C amplitude/envelope enable</td></tr>
<tr><td>$0B</td><td>envelope frequency, low 8 bits</td></tr>
<tr><td>$0C</td><td>envelope frequency, high 8 bits</td></tr>
<tr><td>$0D</td><td>envelope shape</td></tr>
<tr><td>$0E</td><td>I/O port A data</td></tr>
<tr><td>$0F</td><td>I/O port B data</td></tr>
</table>',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GND',
        2 => 'NC',
        3 => 'ANALOG B',
        4 => 'ANALOG A',
        5 => 'NC',
        6 => 'IOB7',
        7 => 'IOB6',
        8 => 'IOB5',
        9 => 'IOB4',
        10 => 'IOB3',
        11 => 'IOB2',
        12 => 'IOB1',
        13 => 'IOB0',
        14 => 'IOA7',
        15 => 'IOA6',
        16 => 'IOA5',
        17 => 'IOA4',
        18 => 'IOA3',
        19 => 'IOA2',
        20 => 'IOA1',
        21 => 'IOA0',
        22 => 'CLOCK',
        23 => '~RESET',
        24 => '~A9',
        25 => 'A8',
        26 => 'TEST 2/~SEL',
        27 => 'BDIR',
        28 => 'BC2',
        29 => 'BC1',
        30 => 'DA7',
        31 => 'DA6',
        32 => 'DA5',
        33 => 'DA4',
        34 => 'DA3',
        35 => 'DA2',
        36 => 'DA1',
        37 => 'DA0',
        38 => 'ANALOG C',
        39 => 'TEST 1',
        40 => 'Vcc',
      ),
    ),
  ),
  'DS1307' => 
  array (
    'description' => '64 x 8, serial, I2C real-time clock',
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/DS1307.pdf',
    'pins' => 
    array (
      'X1' => 
      array (
        'desc' => '32.768kHz crystal connection',
      ),
      'X2' => 
      array (
        'desc' => '32.768kHz crystal connection',
      ),
      'V__BAT' => 
      array (
        'desc' => 'backup supply voltage (e.g. 3V lithium coin cell)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'SDA' => 
      array (
        'desc' => 'serial data input/output',
      ),
      'SCL' => 
      array (
        'desc' => 'serial clock input',
      ),
      'SQW/OUT' => 
      array (
        'desc' => 'square wave output',
      ),
      'Vcc' => 
      array (
        'desc' => 'primary supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'A lithium battery with 48 mAh or greater will back up the DS1307 for more than 10 years.',
      1 => 'Square wave output can be 1Hz, 4.096kHz, 8.192kHz, or 32.768kHz.',
      2 => 'Reads/writes are inhibited when Vcc falls below 1.25 x V__BAT.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'X1',
        2 => 'X2',
        3 => 'V__BAT',
        4 => 'GND',
        5 => 'SDA',
        6 => 'SCL',
        7 => 'SQW/OUT',
        8 => 'Vcc',
      ),
    ),
  ),
  'DS1620' => 
  array (
    'description' => 'Digital Thermometer and Thermostat',
    'aliases' => 
    array (
    ),
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/DS1620.pdf',
    'pins' => 
    array (
      'DQ' => 
      array (
        'desc' => '3-Wire input/output',
      ),
      'CLK/~CONV~' => 
      array (
        'desc' => '3-Wire clock input & stand-alone convert input',
      ),
      '~RST~' => 
      array (
        'desc' => 'reset',
      ),
      'GND' => 
      array (
        'desc' => 'power ground',
      ),
      'T__COM' => 
      array (
        'desc' => 'Hi/Lo combined trigger',
      ),
      'T__LOW' => 
      array (
        'desc' => 'low Temp trigger',
      ),
      'T__HIGH' => 
      array (
        'desc' => 'high Temp trigger',
      ),
      'V__DD' => 
      array (
        'desc' => '+3V to +5V',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Data resolution',
        'val' => '9',
        'unit' => 'Bits',
      ),
      1 => 
      array (
        'param' => 'Measurement range',
        'val' => '-55 to +125',
        'unit' => 'Deg C',
      ),
      2 => 
      array (
        'param' => 'Supply Voltage',
        'val' => '3 - 5',
        'unit' => 'Volts',
      ),
    ),
    'notes' => 
    array (
      0 => 'Temperature excursions beyond user defined Max / Min limits will trigger T__HIGH or T__LOW outputs for application driven temperature correction.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'DQ',
        2 => 'CLK/~CONV~',
        3 => '~RST~',
        4 => 'GND',
        5 => 'T__COM',
        6 => 'T__LOW',
        7 => 'T__HIGH',
        8 => 'V__DD',
      ),
    ),
  ),
  'DS32KHZ' => 
  array (
    'name' => 'DS32kHz',
    'description' => '32.768kHz temperature-compensated crystal oscillator',
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/DS32kHz.pdf',
    'pins' => 
    array (
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'V__BAT' => 
      array (
        'desc' => '+3V nominal backup supply voltage',
      ),
      '32kHz' => 
      array (
        'desc' => '32.768kHz push-pull output',
      ),
      'Vcc' => 
      array (
        'desc' => 'primary supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Frequency stability, 0°C to +40°C',
        'val' => '±2.0',
        'unit' => 'ppm',
      ),
      1 => 
      array (
        'param' => 'Frequency stability, -40°C to +85°C',
        'val' => '±7.5',
        'unit' => 'ppm',
      ),
    ),
    'packages' => 
    array (
      'SO' => 
      array (
        1 => '32kHz',
        2 => 'Vcc',
        3 => 'NC',
        4 => 'NC',
        5 => 'NC',
        6 => 'NC',
        7 => 'NC',
        8 => 'NC',
        9 => 'NC',
        10 => 'NC',
        11 => 'NC',
        12 => 'NC',
        13 => 'GND',
        14 => 'V__BAT',
        15 => 'NC',
        16 => 'NC',
      ),
      'EDIP' => 
      array (
        1 => 'NC',
        2 => 'NOT_PRESENT',
        3 => 'NOT_PRESENT',
        4 => 'GND',
        5 => 'V__BAT',
        6 => 'NC',
        7 => 'NC',
        8 => 'NC',
        9 => 'NC',
        10 => 'NC',
        11 => 'NC',
        12 => '32kHz',
        13 => 'Vcc',
        14 => 'NC',
      ),
      'BGA' => 
      array (
        'A1' => 'GND',
        'A2' => 'GND',
        'A3' => 'GND',
        'A4' => 'V__BAT',
        'A5' => 'V__BAT',
        'A6' => 'GND',
        'A7' => 'NC',
        'A8' => 'NC',
        'A9' => 'GND',
        'B1' => 'GND',
        'B2' => 'GND',
        'B3' => 'GND',
        'B4' => 'V__BAT',
        'B5' => 'V__BAT',
        'B6' => 'GND',
        'B7' => 'NC',
        'B8' => 'NC',
        'B9' => 'GND',
        'C1' => 'GND',
        'C2' => 'Vcc',
        'C3' => 'Vcc',
        'C4' => '32kHz',
        'C5' => '32kHz',
        'C6' => 'GND',
        'C7' => 'NC',
        'C8' => 'NC',
        'C9' => 'GND',
        'D1' => 'GND',
        'D2' => 'Vcc',
        'D3' => 'Vcc',
        'D4' => '32kHz',
        'D5' => '32kHz',
        'D6' => 'GND',
        'D7' => 'NC',
        'D8' => 'NC',
        'D9' => 'GND',
      ),
    ),
  ),
  'HSN-1000' => 
  array (
    'description' => 'Nuclear event detector',
    'aliases' => 
    array (
    ),
    'family' => 'Maxwell',
    'datasheet' => 'http://www.maxwell.com/products/microelectronics/docs/HSN1000_REV3.PDF',
    'pins' => 
    array (
      'V__L' => 
      array (
        'desc' => 'load voltage',
      ),
      '~NED' => 
      array (
        'desc' => 'nuclear event detection (active low)',
      ),
      'CAP1' => 
      array (
        'desc' => 'external capacitor',
      ),
      'CAP2' => 
      array (
        'desc' => 'external capacitor',
      ),
      'BIT' => 
      array (
        'desc' => 'built-in test',
      ),
      'GND' => 
      array (
        'desc' => 'package ground and case',
      ),
      'V__B' => 
      array (
        'desc' => 'pin diode bias',
      ),
      'THR_ADJ' => 
      array (
        'desc' => 'threshold adjust',
      ),
      'V__H' => 
      array (
        'desc' => 'hardened supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Hardened supply voltage',
        'val' => 
        array (
          0 => '4.5 (min)',
          1 => '5.5 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Radiation propagation delay time',
        'val' => '20',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Dose rate (operate-through)',
        'val' => '1 × 10<sup>12</sup>',
        'unit' => 'rad(Si)/s',
      ),
      3 => 
      array (
        'param' => 'Total dose',
        'val' => '1 × 10<sup>6</sup>',
        'unit' => 'rad(Si)',
      ),
      4 => 
      array (
        'param' => 'Neutron fluence',
        'val' => '5 × 10<sup>13</sup>',
        'unit' => 'n/cm<sup>2</sup>',
      ),
      5 => 
      array (
        'param' => 'Approximate detection range',
        'val' => 
        array (
          0 => '2 × 10<sup>5</sup> (min)',
          1 => '2 × 10<sup>7</sup> (max)',
        ),
        'unit' => 'rad(Si)/s',
      ),
    ),
    'notes' => 
    array (
      0 => 'Less than a 30% variation in detection threshold can be expected over the entire operating temperature range.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'V__L',
        2 => '~NED',
        3 => 'NC',
        4 => 'CAP1',
        5 => 'CAP2',
        6 => 'BIT',
        7 => 'GND',
        8 => 'V__B',
        9 => 'THR_ADJ',
        10 => 'NC',
        11 => 'NC',
        12 => 'NC',
        13 => 'NC',
        14 => 'V__H',
      ),
    ),
  ),
  'ICL7660' => 
  array (
    'description' => 'Switched-capacitor voltage converter',
    'aliases' => 
    array (
      0 => 'MAX1044',
    ),
    'datasheet' => 'http://www.intersil.com/data/fn/fn3072.pdf',
    'pins' => 
    array (
      'CAP+' => 
      array (
        'desc' => 'connection to + terminal of charge-pump capacitor',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'CAP-' => 
      array (
        'desc' => 'connection to - terminal of charge-pump capacitor',
      ),
      'V__OUT' => 
      array (
        'desc' => 'negative voltage output',
      ),
      'LV' => 
      array (
        'desc' => 'low voltage; connect to ground for V+ < 3.5V',
      ),
      'OSC' => 
      array (
        'desc' => 'oscillator control input',
      ),
      'V+' => 
      array (
        'desc' => 'positive supply voltage (1.5V to 10V)',
      ),
    ),
    'notes' => 
    array (
      0 => 'Basic negative voltage converter: 10µF capacitor across pins 2 and 4; 10µF capacitor across pin 5 (negative lead) and ground (positive lead).',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'NC',
        2 => 'CAP+',
        3 => 'GND',
        4 => 'CAP-',
        5 => 'V__OUT',
        6 => 'LV',
        7 => 'OSC',
        8 => 'V+',
      ),
    ),
  ),
  'ICM7228B' => 
  array (
    'description' => '8-digit LED display decoder/driver, common cathode',
    'family' => 'Intersil',
    'datasheet' => 'http://www.intersil.com/data/fn/fn3160.pdf',
    'pins' => 
    array (
      'DIGIT 4' => 
      array (
        'desc' => 'digit 4 cathode',
      ),
      'DIGIT 6' => 
      array (
        'desc' => 'digit 6 cathode',
      ),
      'DIGIT 3' => 
      array (
        'desc' => 'digit 3 cathode',
      ),
      'DIGIT 1' => 
      array (
        'desc' => 'digit 1 cathode',
      ),
      'ID6' => 
      array (
        'desc' => 'data bit 6 (HEXA/~CODE-B~)',
      ),
      'ID5' => 
      array (
        'desc' => 'data bit 5 (~DECODE~)',
      ),
      'ID7' => 
      array (
        'desc' => 'data bit 7 (DATA COMING)',
      ),
      '~WRITE' => 
      array (
        'desc' => 'write (active low, low-to-high edge triggered)',
      ),
      'MODE' => 
      array (
        'desc' => 'mode select (control or data word)',
      ),
      'ID4' => 
      array (
        'desc' => 'data bit 4 (~SHUTDOWN~)',
      ),
      'ID1' => 
      array (
        'desc' => 'data bit 1',
      ),
      'ID0' => 
      array (
        'desc' => 'data bit 0',
      ),
      'ID2' => 
      array (
        'desc' => 'data bit 2',
      ),
      'ID3' => 
      array (
        'desc' => 'data bit 3',
      ),
      'DP' => 
      array (
        'desc' => 'decimal point anode',
      ),
      'SEG a' => 
      array (
        'desc' => 'segment a anode',
      ),
      'SEG b' => 
      array (
        'desc' => 'segment b anode',
      ),
      'SEG d' => 
      array (
        'desc' => 'segment d anode',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'SEG c' => 
      array (
        'desc' => 'segment c anode',
      ),
      'SEG e' => 
      array (
        'desc' => 'segment e anode',
      ),
      'SEG f' => 
      array (
        'desc' => 'segment f anode',
      ),
      'SEG g' => 
      array (
        'desc' => 'segment g anode',
      ),
      'DIGIT 8' => 
      array (
        'desc' => 'digit 8 cathode',
      ),
      'DIGIT 2' => 
      array (
        'desc' => 'digit 2 cathode',
      ),
      'DIGIT 5' => 
      array (
        'desc' => 'digit 5 cathode',
      ),
      'DIGIT 7' => 
      array (
        'desc' => 'digit 7 cathode',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Display scan rate',
        'val' => '390',
        'unit' => 'Hz',
      ),
      1 => 
      array (
        'param' => 'Inter-digit blanking time',
        'val' => '10',
        'unit' => 'µs',
      ),
      2 => 
      array (
        'param' => 'Write pulse width',
        'val' => 
        array (
          0 => '100 (low)',
          1 => '540 (high)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Mode setup time',
        'val' => '150',
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Data setup time',
        'val' => '160',
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Minimum digit drive capability',
        'val' => '50',
        'unit' => 'mA',
      ),
      6 => 
      array (
        'param' => 'Segment driver output impedance',
        'val' => '100',
        'unit' => 'Ω',
      ),
      7 => 
      array (
        'param' => 'Peak current drive per segment',
        'val' => '10',
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'When MODE is low, data is loaded into display RAM. When MODE is high, data is loaded into control register.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'DIGIT 4',
        2 => 'DIGIT 6',
        3 => 'DIGIT 3',
        4 => 'DIGIT 1',
        5 => 'ID6',
        6 => 'ID5',
        7 => 'ID7',
        8 => '~WRITE',
        9 => 'MODE',
        10 => 'ID4',
        11 => 'ID1',
        12 => 'ID0',
        13 => 'ID2',
        14 => 'ID3',
        15 => 'DP',
        16 => 'SEG a',
        17 => 'SEG b',
        18 => 'SEG d',
        19 => 'Vcc',
        20 => 'SEG c',
        21 => 'SEG e',
        22 => 'SEG f',
        23 => 'SEG g',
        24 => 'DIGIT 8',
        25 => 'DIGIT 2',
        26 => 'DIGIT 5',
        27 => 'DIGIT 7',
        28 => 'GND',
      ),
    ),
  ),
  'LF347' => 
  array (
    'description' => 'Wide bandwidth quad JFET-input operational amplifier',
    'aliases' => 
    array (
      0 => 'LF147',
    ),
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF147.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      '3OUT' => 
      array (
        'desc' => 'output 3',
      ),
      '3IN-' => 
      array (
        'desc' => 'inverting input 3',
      ),
      '3IN+' => 
      array (
        'desc' => 'non-inverting input 3',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      '4IN+' => 
      array (
        'desc' => 'non-inverting input 4',
      ),
      '4IN-' => 
      array (
        'desc' => 'inverting input 4',
      ),
      '4OUT' => 
      array (
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '8 (min)',
          1 => '36 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum offset voltage',
        'val' => '5',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '4',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '20',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'Vcc',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => '3OUT',
        9 => '3IN-',
        10 => '3IN+',
        11 => 'Vss',
        12 => '4IN+',
        13 => '4IN-',
        14 => '4OUT',
      ),
    ),
  ),
  'LF353' => 
  array (
    'description' => 'Wide bandwidth dual JFET-input operational amplifier',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF353.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '10 (min)',
          1 => '36 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '10',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '4',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Settling time to 0.01%',
        'val' => '2',
        'unit' => 'µs',
      ),
      5 => 
      array (
        'param' => 'Voltage noise',
        'val' => '25',
        'unit' => 'nV/√Hz',
      ),
      6 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'Vss',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => 'Vcc',
      ),
    ),
  ),
  'LF411' => 
  array (
    'description' => 'Low-offset, low-drift JFET-input operational amplifier',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF411.pdf',
    'pins' => 
    array (
      'BAL' => 
      array (
        'desc' => 'balance',
      ),
      'IN-' => 
      array (
        'desc' => 'inverting input',
      ),
      'IN+' => 
      array (
        'desc' => 'non-inverting input',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '0.5',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '4',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '15',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '25',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'BAL',
        2 => 'IN-',
        3 => 'IN+',
        4 => 'Vss',
        5 => 'BAL',
        6 => 'OUT',
        7 => 'Vcc',
        8 => 'NC',
      ),
    ),
  ),
  'LF412' => 
  array (
    'description' => 'Low-offset, low-drift dual JFET-input operational amplifier',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF412.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '1',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '4',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '15',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '25',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'Vss',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => 'Vcc',
      ),
    ),
  ),
  'LF444' => 
  array (
    'description' => 'Quad low-power JFET-input operational amplifier',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF444.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      '3OUT' => 
      array (
        'desc' => 'output 3',
      ),
      '3IN-' => 
      array (
        'desc' => 'inverting input 3',
      ),
      '3IN+' => 
      array (
        'desc' => 'non-inverting input 3',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      '4IN+' => 
      array (
        'desc' => 'non-inverting input 4',
      ),
      '4IN-' => 
      array (
        'desc' => 'inverting input 4',
      ),
      '4OUT' => 
      array (
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '2',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '1',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '35',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '0.15',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'Vcc',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => '3OUT',
        9 => '3IN-',
        10 => '3IN+',
        11 => 'Vss',
        12 => '4IN+',
        13 => '4IN-',
        14 => '4OUT',
      ),
    ),
  ),
  'LM301A' => 
  array (
    'description' => 'Operational amplifier',
    'aliases' => 
    array (
      0 => 'LM101A',
      1 => 'LM201A',
    ),
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM101A.pdf',
    'pins' => 
    array (
      'BAL/COMP' => 
      array (
        'desc' => 'balance/compensation',
      ),
      'IN-' => 
      array (
        'desc' => 'inverting input',
      ),
      'IN+' => 
      array (
        'desc' => 'non-inverting input',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      'BAL' => 
      array (
        'desc' => 'balance',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
      'COMP' => 
      array (
        'desc' => 'compensation',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => 
        array (
          0 => '±22 (LM101A/201A)',
          1 => '±18 (LM301A)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => '10',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input offset voltage',
        'val' => 
        array (
          0 => '0.7 (LM101A/201A)',
          1 => '2 (LM301A)',
        ),
        'unit' => 'mV',
      ),
      3 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      4 => 
      array (
        'param' => 'Slew rate',
        'val' => '0.5',
        'unit' => 'V/µs',
      ),
      5 => 
      array (
        'param' => 'Voltage noise',
        'val' => '15',
        'unit' => 'nV/√Hz',
      ),
      6 => 
      array (
        'param' => 'Supply current',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'BAL/COMP',
        2 => 'IN-',
        3 => 'IN+',
        4 => 'Vss',
        5 => 'BAL',
        6 => 'OUT',
        7 => 'Vcc',
        8 => 'COMP',
      ),
    ),
  ),
  'LM311' => 
  array (
    'description' => 'Voltage comparator',
    'aliases' => 
    array (
      0 => 'LM111',
    ),
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM111.pdf',
    'pins' => 
    array (
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'IN+' => 
      array (
        'desc' => 'non-inverting input',
      ),
      'IN-' => 
      array (
        'desc' => 'inverting input',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      'BAL' => 
      array (
        'desc' => 'balance',
      ),
      'BAL/STROBE' => 
      array (
        'desc' => 'balance/strobe',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '36',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => 
        array (
          0 => '3 (LM111)',
          1 => '7.5 (LM311)',
        ),
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Response time',
        'val' => '200',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Supply current',
        'val' => '5.1',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GND',
        2 => 'IN+',
        3 => 'IN-',
        4 => 'Vss',
        5 => 'BAL',
        6 => 'BAL/STROBE',
        7 => 'OUT',
        8 => 'Vcc',
      ),
    ),
  ),
  'LM319' => 
  array (
    'description' => 'High speed dual comparator',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM319.pdf',
    'pins' => 
    array (
      'GND 1' => 
      array (
        'desc' => 'ground 1',
      ),
      '+INPUT 1' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      '-INPUT 1' => 
      array (
        'desc' => 'inverting input 1',
      ),
      'V-' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      'OUTPUT 2' => 
      array (
        'desc' => 'output 2',
      ),
      'GND 2' => 
      array (
        'desc' => 'ground 2',
      ),
      '+INPUT 2' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '-INPUT 2' => 
      array (
        'desc' => 'inverting input 2',
      ),
      'V+' => 
      array (
        'desc' => 'positive supply voltage',
      ),
      'OUTPUT 1' => 
      array (
        'desc' => 'output 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '36',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '±15',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input offset voltage',
        'val' => '2',
        'unit' => 'mV',
      ),
      3 => 
      array (
        'param' => 'Voltage gain',
        'val' => '40',
        'unit' => 'V/mV',
      ),
      4 => 
      array (
        'param' => 'Response time',
        'val' => '80',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'NC',
        2 => 'NC',
        3 => 'GND 1',
        4 => '+INPUT 1',
        5 => '-INPUT 1',
        6 => 'V-',
        7 => 'OUTPUT 2',
        8 => 'GND 2',
        9 => '+INPUT 2',
        10 => '-INPUT 2',
        11 => 'V+',
        12 => 'OUTPUT 1',
        13 => 'NC',
        14 => 'NC',
      ),
    ),
  ),
  'LM324' => 
  array (
    'description' => 'Low power quad operational amplifier',
    'aliases' => 
    array (
      0 => 'LM124',
      1 => 'LM224',
    ),
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM124.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      '3OUT' => 
      array (
        'desc' => 'output 3',
      ),
      '3IN-' => 
      array (
        'desc' => 'inverting input 3',
      ),
      '3IN+' => 
      array (
        'desc' => 'non-inverting input 3',
      ),
      'GND' => 
      array (
        'desc' => 'ground/negative supply voltage',
      ),
      '4IN+' => 
      array (
        'desc' => 'non-inverting input 4',
      ),
      '4IN-' => 
      array (
        'desc' => 'inverting input 4',
      ),
      '4OUT' => 
      array (
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '32',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => '3',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Offset voltage',
        'val' => '2',
        'unit' => 'mV',
      ),
      3 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      4 => 
      array (
        'param' => 'Slew rate',
        'val' => '0.5',
        'unit' => 'V/µs',
      ),
      5 => 
      array (
        'param' => 'Voltage noise',
        'val' => '40',
        'unit' => 'nV/√Hz',
      ),
      6 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '0.18',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'Vcc',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => '3OUT',
        9 => '3IN-',
        10 => '3IN+',
        11 => 'GND',
        12 => '4IN+',
        13 => '4IN-',
        14 => '4OUT',
      ),
    ),
  ),
  'LM339' => 
  array (
    'description' => 'Low-power, low-offset quad comparator',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM139.pdf',
    'pins' => 
    array (
      'OUTPUT 2' => 
      array (
        'desc' => 'output 2',
      ),
      'OUTPUT 1' => 
      array (
        'desc' => 'output 1',
      ),
      'V+' => 
      array (
        'desc' => 'positive supply voltage',
      ),
      '-INPUT 1' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '+INPUT 1' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      '-INPUT 2' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '+INPUT 2' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '-INPUT 3' => 
      array (
        'desc' => 'inverting input 3',
      ),
      '+INPUT 3' => 
      array (
        'desc' => 'non-inverting input 3',
      ),
      '-INPUT 4' => 
      array (
        'desc' => 'inverting input 4',
      ),
      '+INPUT 4' => 
      array (
        'desc' => 'non-inverting input 4',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'OUTPUT 4' => 
      array (
        'desc' => 'output 4',
      ),
      'OUTPUT 3' => 
      array (
        'desc' => 'output 3',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '36 or ±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '36',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Offset voltage',
        'val' => '±3',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Voltage gain',
        'val' => '200',
        'unit' => 'V/mV',
      ),
      4 => 
      array (
        'param' => 'Large signal response time',
        'val' => '300',
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Response time',
        'val' => '1.3',
        'unit' => 'µs',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'OUTPUT 2',
        2 => 'OUTPUT 1',
        3 => 'V+',
        4 => '-INPUT 1',
        5 => '+INPUT 1',
        6 => '-INPUT 2',
        7 => '+INPUT 2',
        8 => '-INPUT 3',
        9 => '+INPUT 3',
        10 => '-INPUT 4',
        11 => '+INPUT 4',
        12 => 'GND',
        13 => 'OUTPUT 4',
        14 => 'OUTPUT 3',
      ),
    ),
  ),
  'LM348' => 
  array (
    'description' => 'Quad 741 operational amplifier',
    'aliases' => 
    array (
      0 => 'LM148',
      1 => 'LM248',
    ),
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM148.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'Vcc' => 
      array (
        'desc' => 'positive supply voltage',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      '3OUT' => 
      array (
        'desc' => 'output 3',
      ),
      '3IN-' => 
      array (
        'desc' => 'inverting input 3',
      ),
      '3IN+' => 
      array (
        'desc' => 'non-inverting input 3',
      ),
      'Vss' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      '4IN+' => 
      array (
        'desc' => 'non-inverting input 4',
      ),
      '4IN-' => 
      array (
        'desc' => 'inverting input 4',
      ),
      '4OUT' => 
      array (
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => 
        array (
          0 => '±22 (LM148)',
          1 => '±18 (LM248/348)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '1',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '0.5',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '60',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '0.6',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'Vcc',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => '3OUT',
        9 => '3IN-',
        10 => '3IN+',
        11 => 'Vss',
        12 => '4IN+',
        13 => '4IN-',
        14 => '4OUT',
      ),
    ),
  ),
  'LM358' => 
  array (
    'description' => 'Low power dual operational amplifier',
    'aliases' => 
    array (
      0 => 'LM158',
      1 => 'LM258',
      2 => 'LM2904',
    ),
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM158.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => 
        array (
          0 => '32 (LM158/258/358)',
          1 => '26 (LM2904)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Input offset voltage',
        'val' => '2',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'dc voltage gain',
        'val' => '100',
        'unit' => 'dB',
      ),
      4 => 
      array (
        'param' => 'Supply current',
        'val' => '0.5',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'GND',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => 'Vcc',
      ),
    ),
  ),
  'LM380' => 
  array (
    'description' => '2.5W audio power amplifier',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM380.pdf',
    'pins' => 
    array (
      'BYPASS' => 
      array (
        'desc' => 'bypass',
      ),
      'IN+' => 
      array (
        'desc' => 'non-inverting input',
      ),
      'GND' => 
      array (
        'desc' => 'ground (heat sink)',
      ),
      'IN-' => 
      array (
        'desc' => 'inverting input',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '22',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum peak current',
        'val' => '1.3',
        'unit' => 'A',
      ),
      2 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '±0.5',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Output power',
        'val' => '2.5',
        'unit' => 'W',
      ),
      4 => 
      array (
        'param' => 'Quiescent power drain',
        'val' => '0.13',
        'unit' => 'W',
      ),
      5 => 
      array (
        'param' => 'Bandwidth',
        'val' => '100',
        'unit' => 'kHz',
      ),
      6 => 
      array (
        'param' => 'Gain',
        'val' => '50',
        'unit' => 'V/V',
      ),
      7 => 
      array (
        'param' => 'Input impedance',
        'val' => '150',
        'unit' => 'kΩ',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'BYPASS',
        2 => 'IN+',
        3 => 'GND',
        4 => 'GND',
        5 => 'GND',
        6 => 'IN-',
        7 => 'GND',
        8 => 'OUT',
        9 => 'NC',
        10 => 'GND',
        11 => 'GND',
        12 => 'GND',
        13 => 'NC',
        14 => 'Vcc',
      ),
    ),
  ),
  'LM384' => 
  array (
    'description' => '5W audio power amplifier',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM384.pdf',
    'pins' => 
    array (
      'BYPASS' => 
      array (
        'desc' => 'bypass',
      ),
      'IN+' => 
      array (
        'desc' => 'non-inverting input',
      ),
      'GND' => 
      array (
        'desc' => 'ground (heat sink)',
      ),
      'IN-' => 
      array (
        'desc' => 'inverting input',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '26',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => '12',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum peak current',
        'val' => '1.3',
        'unit' => 'A',
      ),
      3 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '±0.5',
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Output power',
        'val' => '5',
        'unit' => 'W',
      ),
      5 => 
      array (
        'param' => 'Bandwidth',
        'val' => '450',
        'unit' => 'kHz',
      ),
      6 => 
      array (
        'param' => 'Gain',
        'val' => '50',
        'unit' => 'V/V',
      ),
      7 => 
      array (
        'param' => 'Input impedance',
        'val' => '150',
        'unit' => 'kΩ',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'BYPASS',
        2 => 'IN+',
        3 => 'GND',
        4 => 'GND',
        5 => 'GND',
        6 => 'IN-',
        7 => 'GND',
        8 => 'OUT',
        9 => 'NC',
        10 => 'GND',
        11 => 'GND',
        12 => 'GND',
        13 => 'NC',
        14 => 'Vcc',
      ),
    ),
  ),
  'LM386' => 
  array (
    'description' => 'Low voltage audio power amplifier',
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM386.pdf',
    'pins' => 
    array (
      'GAIN' => 
      array (
        'desc' => 'gain adjustment',
      ),
      'IN-' => 
      array (
        'desc' => 'inverting input',
      ),
      'IN+' => 
      array (
        'desc' => 'non-inverting input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'BYPASS' => 
      array (
        'desc' => 'bypass',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '4 (min)',
          1 => '12 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Quiescent current',
        'val' => '4',
        'unit' => 'mA',
      ),
      2 => 
      array (
        'param' => 'Output power',
        'val' => '325',
        'unit' => 'mW',
      ),
      3 => 
      array (
        'param' => 'Voltage gain',
        'val' => 
        array (
          0 => '20 (min)',
          1 => '200 (max)',
        ),
      ),
      4 => 
      array (
        'param' => 'Bandwidth',
        'val' => '300',
        'unit' => 'kHz',
      ),
      5 => 
      array (
        'param' => 'Total harmonic distortion',
        'val' => '0.2',
        'unit' => '%',
      ),
    ),
    'notes' => 
    array (
      0 => 'The gain can be varied between 20 and 200 with a resistor in series with a capacitor across pins 1 and 8.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GAIN',
        2 => 'IN-',
        3 => 'IN+',
        4 => 'GND',
        5 => 'OUT',
        6 => 'Vcc',
        7 => 'BYPASS',
        8 => 'GAIN',
      ),
    ),
  ),
  'LM393' => 
  array (
    'description' => 'Low-power, low-offset dual comparator',
    'aliases' => 
    array (
      0 => 'LM193',
      1 => 'LM293',
    ),
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM193.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '36',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '1',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Response time',
        'val' => '1.3',
        'unit' => 'µs',
      ),
      3 => 
      array (
        'param' => 'Supply current',
        'val' => '0.4',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'GND',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => 'Vcc',
      ),
    ),
  ),
  'MAX1771' => 
  array (
    'description' => 'High-efficiency, low IQ, step-up DC-DC controller',
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/MAX1771.pdf',
    'pins' => 
    array (
      'EXT' => 
      array (
        'desc' => 'gate drive for external n-channel power transistor',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'FB' => 
      array (
        'desc' => 'feedback input for adjustable output (tie to GND for fixed output)',
      ),
      'SHDN' => 
      array (
        'desc' => 'shutdown (active high)',
      ),
      'REF' => 
      array (
        'desc' => '1.5V reference output',
      ),
      'AGND' => 
      array (
        'desc' => 'analog ground',
      ),
      'GND' => 
      array (
        'desc' => 'output driver (high-current) ground',
      ),
      'CS' => 
      array (
        'desc' => 'current sense amplifier input',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Input voltage',
        'val' => 
        array (
          0 => '2 (min)',
          1 => '16.5 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Output voltage (when fixed)',
        'val' => '12',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum output power',
        'val' => '24',
        'unit' => 'W',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'EXT',
        2 => 'Vcc',
        3 => 'FB',
        4 => 'SHDN',
        5 => 'REF',
        6 => 'AGND',
        7 => 'GND',
        8 => 'CS',
      ),
    ),
  ),
  'MAX232' => 
  array (
    'description' => '+5V-powered multichannel RS-232 driver/receiver',
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/MAX220-MAX249.pdf',
    'pins' => 
    array (
      'C1+' => 
      array (
        'desc' => 'capacitor 1 connection',
      ),
      'V+' => 
      array (
        'desc' => '+10V output',
      ),
      'C1-' => 
      array (
        'desc' => 'capacitor 1 connection',
      ),
      'C2+' => 
      array (
        'desc' => 'capacitor 2 connection',
      ),
      'C2-' => 
      array (
        'desc' => 'capacitor 2 connection',
      ),
      'V-' => 
      array (
        'desc' => '-10V output',
      ),
      'T2__OUT' => 
      array (
        'desc' => 'TTL/CMOS output',
      ),
      'R2__IN' => 
      array (
        'desc' => 'RS-232 input',
      ),
      'R2__OUT' => 
      array (
        'desc' => 'RS-232 output',
      ),
      'T2__IN' => 
      array (
        'desc' => 'TTL/CMOS input',
      ),
      'T1__IN' => 
      array (
        'desc' => 'TTL/CMOS input',
      ),
      'R1__OUT' => 
      array (
        'desc' => 'RS-232 output',
      ),
      'R1__IN' => 
      array (
        'desc' => 'RS-232 input',
      ),
      'T1__OUT' => 
      array (
        'desc' => 'TTL/CMOS output',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'Vcc' => 
      array (
        'desc' => '+5V supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Data rate',
        'val' => '120',
        'unit' => 'kbps',
      ),
    ),
    'notes' => 
    array (
      0 => 'Use five capacitors; C1 between pins 1 and 3, C2 between pins 4 and 5, C3 between pin 2 and +5v, C4 between ground and pin 6, and C5 between +5V and ground. See datasheet for schematic.',
      1 => 'C1 through C5 should be 1.0 µF electrolytic capacitors.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'C1+',
        2 => 'V+',
        3 => 'C1-',
        4 => 'C2+',
        5 => 'C2-',
        6 => 'V-',
        7 => 'T2__OUT',
        8 => 'R2__IN',
        9 => 'R2__OUT',
        10 => 'T2__IN',
        11 => 'T1__IN',
        12 => 'R1__OUT',
        13 => 'R1__IN',
        14 => 'T1__OUT',
        15 => 'GND',
        16 => 'Vcc',
      ),
    ),
  ),
  'MC34063' => 
  array (
    'description' => 'Step up/down inverting switching regulator',
    'family' => 'power',
    'datasheet' => 'http://www.onsemi.com/pub_link/Collateral/MC34063A-D.PDF',
    'pins' => 
    array (
      'SW C' => 
      array (
        'desc' => 'switch collector',
      ),
      'SW E' => 
      array (
        'desc' => 'switch emitter',
      ),
      'CAP' => 
      array (
        'desc' => 'timing capacitor',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'COMP IN' => 
      array (
        'desc' => 'comparator inverting input',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'I__pk SENSE' => 
      array (
        'desc' => 'I__pk sense',
      ),
      'DRIVER C' => 
      array (
        'desc' => 'driver collector',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '3 (min)',
          1 => '40 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Output switch current',
        'val' => '1.5',
        'unit' => 'A',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'SW C',
        2 => 'SW E',
        3 => 'CAP',
        4 => 'GND',
        5 => 'COMP IN',
        6 => 'Vcc',
        7 => 'I__pk SENSE',
        8 => 'DRIVER C',
      ),
    ),
  ),
  'MCP23017' => 
  array (
    'description' => '16-Bit I/O Expander with Serial Interface',
    'aliases' => 
    array (
    ),
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21952b.pdf',
    'pins' => 
    array (
      'GPB0' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPB1' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPB2' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPB3' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPB4' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPB5' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPB6' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPB7' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'V__DD' => 
      array (
        'desc' => 'Power',
      ),
      'V__SS' => 
      array (
        'desc' => 'Ground',
      ),
      'SCL' => 
      array (
        'desc' => 'Serial clock input',
      ),
      'SDA' => 
      array (
        'desc' => 'Serial data I/O',
      ),
      'A0' => 
      array (
        'desc' => 'Hardware address pin. Must be externally biased.',
      ),
      'A1' => 
      array (
        'desc' => 'Hardware address pin. Must be externally biased.',
      ),
      'A2' => 
      array (
        'desc' => 'Hardware address pin. Must be externally biased.',
      ),
      '~RESET' => 
      array (
        'desc' => 'Hardware reset. Must be externally biased.',
      ),
      'INTB' => 
      array (
        'desc' => 'Interrupt output for PORTB. Can be configured as active-high, active-low or open-drain.',
      ),
      'INTA' => 
      array (
        'desc' => 'Interrupt output for PORTB. Can be configured as active-high, active-low or open-drain.',
      ),
      'GPA0' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPA1' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPA2' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPA3' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPA4' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPA5' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPA6' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
      'GPA7' => 
      array (
        'desc' => 'Bidirectional I/O pin.',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'GPB0',
        2 => 'GPB1',
        3 => 'GPB2',
        4 => 'GPB3',
        5 => 'GPB4',
        6 => 'GPB5',
        7 => 'GPB6',
        8 => 'GPB7',
        9 => 'V__DD',
        10 => 'V__SS',
        11 => 'NC',
        12 => 'SCL',
        13 => 'SDA',
        14 => 'NC',
        15 => 'A0',
        16 => 'A1',
        17 => 'A2',
        18 => '~RESET',
        19 => 'INTB',
        20 => 'INTA',
        21 => 'GPA0',
        22 => 'GPA1',
        23 => 'GPA2',
        24 => 'GPA3',
        25 => 'GPA4',
        26 => 'GPA5',
        27 => 'GPA6',
        28 => 'GPA7',
      ),
    ),
  ),
  'MCP3002' => 
  array (
    'description' => 'Dual channel 10-bit ADC with SPI interface',
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21294d.pdf',
    'pins' => 
    array (
      '~CS~/SHDN' => 
      array (
        'desc' => 'chip select/shutdown',
      ),
      'CH0' => 
      array (
        'desc' => 'channel 0 analog input',
      ),
      'CH1' => 
      array (
        'desc' => 'channel 1 analog input',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'D__IN' => 
      array (
        'desc' => 'serial data in',
      ),
      'D__OUT' => 
      array (
        'desc' => 'serial data out',
      ),
      'CLK' => 
      array (
        'desc' => 'serial clock',
      ),
      'V__CC/V__REF' => 
      array (
        'desc' => '+2.7V to 5.5V supply/reference voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum sampling rate',
        'val' => 
        array (
          0 => '200 (Vcc = 5V)',
          1 => '75 (Vcc = 2.7V)',
        ),
        'unit' => 'ksps',
      ),
      1 => 
      array (
        'param' => 'Differential nonlinearity',
        'val' => '±1',
        'unit' => 'LSB',
      ),
      2 => 
      array (
        'param' => 'Integral nonlinearity',
        'val' => '±1',
        'unit' => 'LSB',
      ),
      3 => 
      array (
        'param' => 'Typical active current',
        'val' => '375',
        'unit' => 'µA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~CS~/SHDN',
        2 => 'CH0',
        3 => 'CH1',
        4 => 'GND',
        5 => 'D__IN',
        6 => 'D__OUT',
        7 => 'CLK',
        8 => 'V__CC/V__REF',
      ),
    ),
  ),
  'MCP3201' => 
  array (
    'name' => 'MCP3201',
    'description' => '12-Bit A/D SPI interface A/D Converter',
    'aliases' => 
    array (
    ),
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21290e.pdf',
    'pins' => 
    array (
      'V__Ref' => 
      array (
        'desc' => 'Analog reference voltage',
      ),
      'IN+' => 
      array (
        'desc' => 'Positive analog input',
      ),
      'IN-' => 
      array (
        'desc' => 'Negative analog input',
      ),
      'V__SS' => 
      array (
        'desc' => 'Ground',
      ),
      '~CS~/SHDN' => 
      array (
        'desc' => 'Chip select/shutdown',
      ),
      'D__OUT' => 
      array (
        'desc' => 'SPI data out',
      ),
      'CLK' => 
      array (
        'desc' => 'SPI Clock',
      ),
      'V__DD' => 
      array (
        'desc' => 'Positive supply voltage (+2.7 to 5.5V)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Resolution',
        'val' => '12',
        'unit' => 'bits',
      ),
      1 => 
      array (
        'param' => 'Maximum sample rate (V__DD = 5V)',
        'val' => '100',
        'unit' => 'ksps',
      ),
      2 => 
      array (
        'param' => 'Maximum sample rate (V__DD = 2.7V)',
        'val' => '50',
        'unit' => 'ksps',
      ),
      3 => 
      array (
        'param' => 'Minimum operating voltage',
        'val' => '2.7',
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Maximum operating voltage (nominal)',
        'val' => '5.5',
        'unit' => 'V',
      ),
      5 => 
      array (
        'param' => 'Maximum operating voltage (absolute maximum rating)',
        'val' => '7',
        'unit' => 'V',
      ),
      6 => 
      array (
        'param' => 'Maximum active current (V__DD = 5V)',
        'val' => '400',
        'unit' => 'µA',
      ),
    ),
    'notes' => 
    array (
      0 => 'Also available with 2 channels (MCP3202), 4 channels (MCP3204) and 8 channels (MCP3208)',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'V__Ref',
        2 => 'IN+',
        3 => 'IN-',
        4 => 'V__SS',
        5 => '~CS~/SHDN',
        6 => 'D__OUT',
        7 => 'CLK',
        8 => 'V__DD',
      ),
    ),
  ),
  'MCP3202' => 
  array (
    'name' => 'MCP3202',
    'description' => '12-Bit 2-Channel SPI interface A/D Converter',
    'aliases' => 
    array (
    ),
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/aen/DeviceDoc/21034e.pdf',
    'pins' => 
    array (
      '~CS~/SHDN' => 
      array (
        'desc' => 'Chip select/Shutdown',
      ),
      'CH0' => 
      array (
        'desc' => 'Channel 1 analog input',
      ),
      'CH1' => 
      array (
        'desc' => 'Channel 2 analog input',
      ),
      'V__SS' => 
      array (
        'desc' => 'Ground',
      ),
      'D__IN' => 
      array (
        'desc' => 'SPI data input',
      ),
      'D__OUT' => 
      array (
        'desc' => 'SPI data output',
      ),
      'CLK' => 
      array (
        'desc' => 'SPI clock',
      ),
      'V__DD/V__REF' => 
      array (
        'desc' => 'Supply voltage/analog reference voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Resolution',
        'val' => '12',
        'unit' => 'bits',
      ),
      1 => 
      array (
        'param' => 'Maximum sample rate (V__DD = 5V)',
        'val' => '100',
        'unit' => 'ksps',
      ),
      2 => 
      array (
        'param' => 'Maximum sample rate (V__DD = 2.7V)',
        'val' => '50',
        'unit' => 'ksps',
      ),
      3 => 
      array (
        'param' => 'Minimum operating voltage',
        'val' => '2.7',
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Maximum operating voltage (nominal)',
        'val' => '5.5',
        'unit' => 'V',
      ),
      5 => 
      array (
        'param' => 'Maximum operating voltage (absolute maximum rating)',
        'val' => '7',
        'unit' => 'V',
      ),
      6 => 
      array (
        'param' => 'Maximum active current (V__DD = 5V)',
        'val' => '550',
        'unit' => 'µa',
      ),
    ),
    'notes' => 
    array (
      0 => 'Also available with 1 channel (MCP3201), 4 channels (MCP3204) and 8 channels (MCP3208)',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~CS~/SHDN',
        2 => 'CH0',
        3 => 'CH1',
        4 => 'V__SS',
        5 => 'D__IN',
        6 => 'D__OUT',
        7 => 'CLK',
        8 => 'V__DD/V__REF',
      ),
    ),
  ),
  'MCP3204' => 
  array (
    'name' => 'MCP3204',
    'description' => '4-channel 12 bit SPI A/D converter',
    'aliases' => 
    array (
    ),
    'family' => 'microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/devicedoc/21298c.pdf',
    'pins' => 
    array (
      'CH0' => 
      array (
        'desc' => 'Analog channel 0 input',
      ),
      'CH1' => 
      array (
        'desc' => 'Analog channel 1 input',
      ),
      'CH2' => 
      array (
        'desc' => 'Analog channel 2 input',
      ),
      'CH3' => 
      array (
        'desc' => 'Analog channel 3 input',
      ),
      'DGND' => 
      array (
        'desc' => 'Digital ground',
      ),
      '~CS~/SHDN' => 
      array (
        'desc' => 'Chip select / Shutdown',
      ),
      'D__IN' => 
      array (
        'desc' => 'Serial data input',
      ),
      'D__OUT' => 
      array (
        'desc' => 'Serial data output',
      ),
      'CLK' => 
      array (
        'desc' => 'SPI clock',
      ),
      'AGND' => 
      array (
        'desc' => 'Analog ground',
      ),
      'V__REF' => 
      array (
        'desc' => 'Analog reference input voltage',
      ),
      'V__DD' => 
      array (
        'desc' => '+2.7 to 5.5 V power supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Max active current',
        'val' => '400',
        'unit' => 'µA',
      ),
      1 => 
      array (
        'param' => 'Max sampling rate',
        'val' => 
        array (
          0 => '100 (5V supply)',
          1 => '50 (2.7V supply)',
        ),
        'unit' => 'ksps',
      ),
      2 => 
      array (
        'param' => 'Resolution',
        'val' => '12',
        'unit' => 'bits',
      ),
      3 => 
      array (
        'param' => 'Conversion time',
        'val' => '12',
        'unit' => 'clock cycles',
      ),
    ),
    'notes' => 
    array (
      0 => 'Also available as one-channel (MCP3201), two-channel (MCP3202) and eight-channel (MCP3208) version',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'CH0',
        2 => 'CH1',
        3 => 'CH2',
        4 => 'CH3',
        5 => 'NC',
        6 => 'NC',
        7 => 'DGND',
        8 => '~CS~/SHDN',
        9 => 'D__IN',
        10 => 'D__OUT',
        11 => 'CLK',
        12 => 'AGND',
        13 => 'V__REF',
        14 => 'V__DD',
      ),
    ),
  ),
  'NE5532' => 
  array (
    'description' => 'Dual operational amplifier',
    'aliases' => 
    array (
    ),
    'family' => 'Fairchild',
    'datasheet' => 'http://www.fairchildsemi.com/ds/NE/NE5532.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'Output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'Inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'Non-inverting input 1',
      ),
      'GND' => 
      array (
        'desc' => 'Ground',
      ),
      '2IN+' => 
      array (
        'desc' => 'Non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'Inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'Output 2',
      ),
      'Vcc' => 
      array (
        'desc' => 'Supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => '±22',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Differential input voltage',
        'val' => '±13',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input voltage',
        'val' => 'Supply voltage',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Power dissipation (8-DIP)',
        'val' => '1100',
        'unit' => 'mW',
      ),
      4 => 
      array (
        'param' => 'Power dissipation (8-SOP)',
        'val' => '500',
        'unit' => 'mW',
      ),
      5 => 
      array (
        'param' => 'Operating temperature range',
        'val' => '0~70',
        'unit' => '°C',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'GND',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => 'Vcc',
      ),
    ),
  ),
  'PCF8574' => 
  array (
    'description' => 'Remote 8-bit I/O expander for I2C bus',
    'aliases' => 
    array (
      0 => 'PCF8574P',
    ),
    'family' => 'Philips',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/PCF8574_4.pdf',
    'pins' => 
    array (
      'A0' => 
      array (
        'desc' => 'address input 0',
      ),
      'A1' => 
      array (
        'desc' => 'address input 1',
      ),
      'A2' => 
      array (
        'desc' => 'address input 2',
      ),
      'P0' => 
      array (
        'desc' => 'quasi-bidirectional I/O 0',
      ),
      'P1' => 
      array (
        'desc' => 'quasi-bidirectional I/O 1',
      ),
      'P2' => 
      array (
        'desc' => 'quasi-bidirectional I/O 2',
      ),
      'P3' => 
      array (
        'desc' => 'quasi-bidirectional I/O 3',
      ),
      'GND' => 
      array (
        'desc' => 'supply ground',
      ),
      'P4' => 
      array (
        'desc' => 'quasi-bidirectional I/O 4',
      ),
      'P5' => 
      array (
        'desc' => 'quasi-bidirectional I/O 5',
      ),
      'P6' => 
      array (
        'desc' => 'quasi-bidirectional I/O 6',
      ),
      'P7' => 
      array (
        'desc' => 'quasi-bidirectional I/O 7',
      ),
      '~INT' => 
      array (
        'desc' => 'interrupt output (active LOW)',
      ),
      'SCL' => 
      array (
        'desc' => 'serial clock line',
      ),
      'SDA' => 
      array (
        'desc' => 'serial data line',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => '2.5',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '6',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'LOW level output current, minimum',
        'val' => '10',
        'unit' => 'mA',
      ),
      3 => 
      array (
        'param' => 'LOW level output current, typical',
        'val' => '25',
        'unit' => 'mA',
      ),
      4 => 
      array (
        'param' => 'HIGH level output current, minimum',
        'val' => '10',
        'unit' => 'µA',
      ),
      5 => 
      array (
        'param' => 'HIGH level output current, maximum',
        'val' => '300',
        'unit' => 'µA',
      ),
    ),
    'notes' => 
    array (
      0 => 'I2C address range: 0x40-0x4e (7-bit address range: 0x20-0x27)',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A0',
        2 => 'A1',
        3 => 'A2',
        4 => 'P0',
        5 => 'P1',
        6 => 'P2',
        7 => 'P3',
        8 => 'GND',
        9 => 'P4',
        10 => 'P5',
        11 => 'P6',
        12 => 'P7',
        13 => '~INT',
        14 => 'SCL',
        15 => 'SDA',
        16 => 'Vcc',
      ),
    ),
  ),
  'PIC12F683' => 
  array (
    'description' => '8-Pin Flash-Based, 8-Bit CMOS Microcontrollers with nanoWatt Technology',
    'aliases' => 
    array (
    ),
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/41211D_.pdf',
    'pins' => 
    array (
      'VDD' => 
      array (
        'desc' => 'Positive supply',
      ),
      'GP5/T1CKI/OSC1/CLKIN' => 
      array (
        'desc' => 'GPIO 5, Timer1 clock, Crystal/Resonator, External clock input',
      ),
      'GP4/AN3/~T1G~/OSC2/CLKOUT' => 
      array (
        'desc' => 'GPIO 4, A/D Channel 3 input, Timer1 gate, Crystal/Resonator, FOSC/4 output',
      ),
      'GP3/~MCLR~/VPP' => 
      array (
        'desc' => 'GPIO 3, Master Clear, Programming voltage',
      ),
      'GP2/AN2/T0CKI/INT/COUT/CCP1' => 
      array (
        'desc' => 'GPIO 2, A/D Channel 2 input, Timer0 clock input, External Interrupt, Comparator 1 output, Capture input/Compare output/PWM output',
      ),
      'GP1/AN1/CIN-/VREF/ICSPCLK' => 
      array (
        'desc' => 'GPIO 1, A/D Channel 1 input, Comparator 1 input, External Voltage Reference, Serial Programming Clock',
      ),
      'GP0/AN0/CIN+/ICSPDAT/ULPWU' => 
      array (
        'desc' => 'GPIO 0, Comparator 1 input, Serial Programming Data I/O, Ultra Low-Power Wake-up input',
      ),
      'VSS' => 
      array (
        'desc' => 'Ground reference',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Program Memory',
        'val' => '3.5',
        'unit' => 'KB',
      ),
      1 => 
      array (
        'param' => 'CPU Speed',
        'val' => '5',
        'unit' => 'MIPS',
      ),
      2 => 
      array (
        'param' => 'RAM',
        'val' => '128',
        'unit' => 'Bytes',
      ),
      3 => 
      array (
        'param' => 'Data EEPROM',
        'val' => '256',
        'unit' => 'Bytes',
      ),
    ),
    'notes' => 
    array (
      0 => 'The Low Pin-count (8) PIC® Flash microcontroller products offer all of the advantages of the well recognized mid-range x14 architecture with standardized features including a wide operating voltage of 2.0-5.5 volts, on-board EEPROM Data Memory, and nanoWatt Technology. Standard analog peripherals include up to 4 channels of 10-bit A/D, an analog comparator module with a single comparator, programmable on-chip voltage reference and a Standard Capture/Compare/PWM (CCP) module.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'VDD',
        2 => 'GP5/T1CKI/OSC1/CLKIN',
        3 => 'GP4/AN3/~T1G~/OSC2/CLKOUT',
        4 => 'GP3/~MCLR~/VPP',
        5 => 'GP2/AN2/T0CKI/INT/COUT/CCP1',
        6 => 'GP1/AN1/CIN-/VREF/ICSPCLK',
        7 => 'GP0/AN0/CIN+/ICSPDAT/ULPWU',
        8 => 'VSS',
      ),
    ),
  ),
  'PIC16F1936' => 
  array (
    'description' => '8-Bit CMOS Microcontrollers with LCD Driver with nano Watt XLPTM Technology',
    'aliases' => 
    array (
    ),
    'family' => 'Microchip 16F',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/41364C.pdf',
    'pins' => 
    array (
      'VPP/~MCLR~/RE3' => 
      array (
        'desc' => 'Programming voltage, Master Clear, General purpose input',
      ),
      'SEG12/VCAP/~SS~/SRNQ/C2OUT/C12IN0-/AN0/RA0' => 
      array (
        'desc' => 'LCD Analog output, Filter capacitor, Slave Select input, SR Latch inverting output, Comparator C2 output, Comparator C1 or C2 negative input, A/D Channel 0 input, General purpose I/O',
      ),
      'SEG7/C12IN1-/AN1/RA1' => 
      array (
        'desc' => 'LCD Analog output, Comparator C1 or C2 negative input, A/D Channel 1 input, General purpose I/O',
      ),
      'COM2/DACOUT/VREF-/C2IN+/AN2/RA2' => 
      array (
        'desc' => 'LCD Analog output, Comparator Voltage Reference output, A/D Negative Voltage Reference input, Comparator C2 positive input, A/D Channel 2 input, General purpose I/O',
      ),
      'SEG15/COM3/VREF+/C1IN+/AN3/RA3' => 
      array (
        'desc' => 'LCD Analog output, LCD Analog output, A/D Voltage Reference input, Comparator C1 positive input, A/D Channel 3 input, General purpose I/O',
      ),
      'SEG4/CCP5/SRQ/T0CKI/CPS6/C1OUT/RA4' => 
      array (
        'desc' => 'LCD Analog output, Capture/Compare/PWM5, SR Latch non-inverting output, Timer0 clock input, Capacitive sensing input 6, Comparator C1 output, General purpose I/O',
      ),
      'SEG5/VCAP/~SS~/SRNQ/CPS7/C2OUT/AN4/RA5' => 
      array (
        'desc' => 'LCD Analog output, Filter capacitor, Slave Select input, SR Latch inverting output, Capacitive sensing input 7, Comparator C2 output, A/D Channel 4 input, General purpose I/O',
      ),
      'GND' => 
      array (
        'desc' => 'Ground reference',
      ),
      'SEG2/CLKIN/OSC1/RA7' => 
      array (
        'desc' => 'LCD Analog output, External clock input, Crystal/Resonator, General purpose I/O',
      ),
      'SEG1/VCAP/CLKOUT/OSC2/RA6' => 
      array (
        'desc' => 'LCD Analog output, Filter capacitor, FOSC/4 output, Crystal/Resonator, General purpose I/O',
      ),
      'P2B/T1CKI/T1OSO/RC0' => 
      array (
        'desc' => 'PWM output, Timer1 clock input, Timer1 oscillator connection, General purpose I/O',
      ),
      'P2A/CCP2/T1OSI/RC1' => 
      array (
        'desc' => 'PWM output, Capture/Compare/PWM2, Timer1 oscillator connection, General purpose I/O',
      ),
      'SEG3/P1A/CCP1/RC2' => 
      array (
        'desc' => 'LCD Analog output, PWM output, Capture/Compare/PWM1, General purpose I/O',
      ),
      'SEG6/SCL/SCK/RC3' => 
      array (
        'desc' => 'LCD Analog output, I2C clock, SPI clock, General purpose I/O',
      ),
      'RC4/SDI/SDA/T1G/SEG11' => 
      array (
        'desc' => 'General purpose I/O, SPI data input, I2C data input/output, Timer1 Gate input, LCD Analog output,',
      ),
      'RC5/SDO/SEG10' => 
      array (
        'desc' => 'General purpose I/O, SPI data output, LCD Analog output',
      ),
      'RC6/TX/CK/CCP3/P3A/SEG9' => 
      array (
        'desc' => 'General purpose I/O, USART asynchronous transmit, USART synchronous clock, Capture/Compare/PWM3, PWM output, LCD Analog output',
      ),
      'RC7/RX/DT/P3B/SEG8' => 
      array (
        'desc' => 'General purpose I/O, USART asynchronous input, USART synchronous data, PWM output, LCD Analog output',
      ),
      'VCC' => 
      array (
        'desc' => 'Positive supply',
      ),
      'RB0/AN12/CPS0/CCP4/SRI/INT/SEG0' => 
      array (
        'desc' => 'General purpose I/O, A/D Channel 12 input, Capacitive sensing input 0, Capture/Compare/PWM4, SR Latch input, External interrupt, LCD analog output',
      ),
      'RB1/AN10/C12IN3-/CPS1/P1C/VLCD1' => 
      array (
        'desc' => 'General purpose I/O, A/D Channel 10 input, Comparator C1 or C2 negative input, Capacitive sensing input 1, PWM output, LCD analog input',
      ),
      'RB2/AN8/CPS2/P1B/VLCD2' => 
      array (
        'desc' => 'General purpose I/O, A/D Channel 8 input, Capacitive sensing input 2, PWM output',
      ),
      'RB3/AN9/C12IN2-/CPS3/CCP2/P2A/VLCD3' => 
      array (
        'desc' => 'General purpose I/O, A/D Channel 9 input, Comparator C1 or C2 negative input, Capacitive sensing input 3, Capture/Compare/PWM2, PWM output, LCD analog input',
      ),
      'RB4/AN11/CPS4/P1D/COM0' => 
      array (
        'desc' => 'General purpose I/O, A/D Channel 11 input, Capacitive sensing input 4, PWM output, LCD Analog output',
      ),
      'RB5/AN13/CPS5/P2B/CCP3/P3A/T1G/COM1' => 
      array (
        'desc' => 'General purpose I/O, A/D Channel 13 input, Capacitive sensing input 5, PWM output, Capture/Compare/PWM3, PWM output, Timer1 Gate input, LCD Analog output',
      ),
      'RB6/ICSPCLK/ICDCLK/SEG14' => 
      array (
        'desc' => 'General purpose I/O, Serial Programming Clock, In-Circuit Debug Clock, LCD Analog output',
      ),
      'RB7/ICSPDAT/ICDDAT/SEG13' => 
      array (
        'desc' => 'General purpose I/O, ICSP Data I/O, In-Circuit Data I/O, LCD Analog output',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Program Memory',
        'val' => '14',
        'unit' => 'KB',
      ),
      1 => 
      array (
        'param' => 'CPU Speed',
        'val' => '8',
        'unit' => 'MIPS',
      ),
      2 => 
      array (
        'param' => 'RAM',
        'val' => '512',
        'unit' => 'Bytes',
      ),
      3 => 
      array (
        'param' => 'Data EEPROM',
        'val' => '256',
        'unit' => 'Bytes',
      ),
    ),
    'notes' => 
    array (
      0 => 'Internal 32MHz oscillator, 60 LCD segment drive support, Integrated Capacitive mTouch Sensing Module',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'VPP/~MCLR~/RE3',
        2 => 'SEG12/VCAP/~SS~/SRNQ/C2OUT/C12IN0-/AN0/RA0',
        3 => 'SEG7/C12IN1-/AN1/RA1',
        4 => 'COM2/DACOUT/VREF-/C2IN+/AN2/RA2',
        5 => 'SEG15/COM3/VREF+/C1IN+/AN3/RA3',
        6 => 'SEG4/CCP5/SRQ/T0CKI/CPS6/C1OUT/RA4',
        7 => 'SEG5/VCAP/~SS~/SRNQ/CPS7/C2OUT/AN4/RA5',
        8 => 'GND',
        9 => 'SEG2/CLKIN/OSC1/RA7',
        10 => 'SEG1/VCAP/CLKOUT/OSC2/RA6',
        11 => 'P2B/T1CKI/T1OSO/RC0',
        12 => 'P2A/CCP2/T1OSI/RC1',
        13 => 'SEG3/P1A/CCP1/RC2',
        14 => 'SEG6/SCL/SCK/RC3',
        15 => 'RC4/SDI/SDA/T1G/SEG11',
        16 => 'RC5/SDO/SEG10',
        17 => 'RC6/TX/CK/CCP3/P3A/SEG9',
        18 => 'RC7/RX/DT/P3B/SEG8',
        19 => 'GND',
        20 => 'VCC',
        21 => 'RB0/AN12/CPS0/CCP4/SRI/INT/SEG0',
        22 => 'RB1/AN10/C12IN3-/CPS1/P1C/VLCD1',
        23 => 'RB2/AN8/CPS2/P1B/VLCD2',
        24 => 'RB3/AN9/C12IN2-/CPS3/CCP2/P2A/VLCD3',
        25 => 'RB4/AN11/CPS4/P1D/COM0',
        26 => 'RB5/AN13/CPS5/P2B/CCP3/P3A/T1G/COM1',
        27 => 'RB6/ICSPCLK/ICDCLK/SEG14',
        28 => 'RB7/ICSPDAT/ICDDAT/SEG13',
      ),
    ),
  ),
  'PIC16F84A' => 
  array (
    'description' => 'PIC16F84A Microcontroller',
    'family' => 'Microchip',
    'datasheet' => 'http://www.microchip.com/stellent/idcplg?IdcService=SS_GET_PAGE&nodeId=1335&dDocName=en010230',
    'pins' => 
    array (
      'RA2' => 
      array (
        'desc' => 'Bi-directional I/O port',
      ),
      'RA3' => 
      array (
        'desc' => 'Bi-directional I/O port',
      ),
      'RA4/T0CKI' => 
      array (
        'desc' => 'Bi-directional I/O port',
      ),
      '~MCLR' => 
      array (
        'desc' => 'Master Clear (Reset) input/programming voltage
input. This pin is an active low RESET to the device.',
      ),
      'GND' => 
      array (
        'desc' => 'Ground reference for logic and I/O pins.',
      ),
      'RB0/INT' => 
      array (
        'desc' => 'External interrupt',
      ),
      'RB1' => 
      array (
        'desc' => 'Bi-directional I/O port',
      ),
      'RB2' => 
      array (
        'desc' => 'Bi-directional I/O port',
      ),
      'RB3' => 
      array (
        'desc' => 'Bi-directional I/O port',
      ),
      'RB4' => 
      array (
        'desc' => 'Interrupt-on-change pin.',
      ),
      'RB5' => 
      array (
        'desc' => 'Interrupt-on-change pin.',
      ),
      'RB6' => 
      array (
        'desc' => 'Interrupt-on-change pin, Serial programming clock',
      ),
      'RB7' => 
      array (
        'desc' => 'Interrupt-on-change pin, Serial programming data.',
      ),
      'Vcc' => 
      array (
        'desc' => 'Positive supply for logic and I/O pins.',
      ),
      'OSC2/CLKIN' => 
      array (
        'desc' => 'Oscillator crystal output. Connects to crystal or
resonator in Crystal Oscillator mode. In RC mode,
OSC2 pin outputs CLKOUT, which has 1/4 the
frequency of OSC1 and denotes the instruction
cycle rate.',
      ),
      'OSC1/CLKOUT' => 
      array (
        'desc' => 'Oscillator crystal input/external clock source input',
      ),
      'RA0' => 
      array (
        'desc' => 'Bi-directional I/O port',
      ),
      'RA1' => 
      array (
        'desc' => 'Bi-directional I/O port',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Max pin sink',
        'val' => '25',
        'unit' => 'mA',
      ),
      1 => 
      array (
        'param' => 'Max pin source',
        'val' => '25',
        'unit' => 'mA',
      ),
      2 => 
      array (
        'param' => 'Operating speed',
        'val' => '20',
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => '18-pin Flash/EEPROM 8-bit Microcontroller',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'RA2',
        2 => 'RA3',
        3 => 'RA4/T0CKI',
        4 => '~MCLR',
        5 => 'GND',
        6 => 'RB0/INT',
        7 => 'RB1',
        8 => 'RB2',
        9 => 'RB3',
        10 => 'RB4',
        11 => 'RB5',
        12 => 'RB6',
        13 => 'RB7',
        14 => 'Vcc',
        15 => 'OSC2/CLKIN',
        16 => 'OSC1/CLKOUT',
        17 => 'RA0',
        18 => 'RA1',
      ),
    ),
  ),
  'PIC18F13K50' => 
  array (
    'description' => '20-Pin USB Flash Microcontrollers with nanoWatt XLP™ Technology',
    'aliases' => 
    array (
      0 => 'PIC18F14K50',
    ),
    'family' => 'Microchip 18F',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/41350C.pdf',
    'pins' => 
    array (
      'VCC' => 
      array (
        'desc' => 'Positive supply for logic and I/O pins',
      ),
      'RA5/OSC1/CLKIN' => 
      array (
        'desc' => 'Digital I/O, Oscillator crystal input or external clock input, External clock source input.',
      ),
      'RA4/AN3/OSC2/CLKOUT' => 
      array (
        'desc' => 'Digital I/O, ADC channel 3, Oscillator crystal output., In RC mode, OSC2 pin outputs CLKOUT',
      ),
      'RA3/~MCLR~/VPP' => 
      array (
        'desc' => 'Digital input, Active-low Master Clear with internal pull-up, High voltage programming input',
      ),
      'RC5/CCP1/P1A/T0CKI' => 
      array (
        'desc' => 'Digital I/O, Capture 1 input/Compare 1 output/PWM 1 output, Enhanced CCP1 PWM output, Timer0 external clock input',
      ),
      'RC4/P1B/C12OUT/SRQ' => 
      array (
        'desc' => 'Digital I/O, Enhanced CCP1 PWM output, Comparator C1 and C2 output, SR Latch output',
      ),
      'RC3/AN7/P1C/C12IN3-/PGM' => 
      array (
        'desc' => 'Digital I/O, ADC channel 7, Enhanced CCP1 PWM output, Comparator C1 and C2 inverting input, Low-Voltage ICSP Programming enable pin',
      ),
      'RC6/AN8/~SS~/T13CKI/T1OSCI' => 
      array (
        'desc' => 'Digital I/O, ADC channel 8, SPI slave select input, Timer0 and Timer3 external clock input, Timer1 oscillator input',
      ),
      'RC7/AN9/SDO/T1OSCO' => 
      array (
        'desc' => 'Digital I/O, ADC channel 9, SPI data out, Timer1 oscillator output',
      ),
      'RB7/TX/CK' => 
      array (
        'desc' => 'Digital I/O, EUSART asynchronous transmit, EUSART synchronous clock (see related RX/DT)',
      ),
      'RB6/SCK/SCI' => 
      array (
        'desc' => 'Digital I/O, Synchronous serial clock input/output for SPI mode, Synchronous serial clock input/output for I2C mode',
      ),
      'RB5/AN11/RX/DT' => 
      array (
        'desc' => 'Digital I/O, ADC channel 11, EUSART asynchronous receive, EUSART synchronous data (see related RX/TX)',
      ),
      'RB4/AN10/SDI/SDA' => 
      array (
        'desc' => 'Digital I/O, ADC channel 10, SPI data in, I2C data I/O',
      ),
      'RC2/AN6/P1D/C12IN2-/CVREF/INT2' => 
      array (
        'desc' => 'Digital I/O, ADC channel 6, Enhanced CCP1 PWM output, Comparator C1 and C2 inverting input, Comparator reference voltage output, External, interrupt 0',
      ),
      'RC1/AN5/C12IN-/INT1/VREF-' => 
      array (
        'desc' => 'Digital I/O, ADC channel 5, Comparator C1 and C2 non-inverting input, External interrupt 0, Comparator reference voltage (low) input',
      ),
      'RC0/AN4/C12IN+/INT0/VREF+' => 
      array (
        'desc' => 'Digital I/O, ADC channel 4, Comparator C1 and C2 non-inverting input, External interrupt 0, Comparator reference voltage (high) input',
      ),
      'VUSB' => 
      array (
        'desc' => 'Positive supply for USB transceiver',
      ),
      'RA1/D-/PGC' => 
      array (
        'desc' => 'Digital input, USB differential minus line (input/output), ICSP programming clock pin',
      ),
      'RA0/D+/PGD' => 
      array (
        'desc' => 'Digital input, USB differential plus line (input/output), ICSP programming data pin',
      ),
      'GND' => 
      array (
        'desc' => 'Ground reference for logic and I/O pins',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Program Memory',
        'val' => '8',
        'unit' => 'KB',
      ),
      1 => 
      array (
        'param' => 'CPU Speed',
        'val' => '12',
        'unit' => 'MIPS',
      ),
      2 => 
      array (
        'param' => 'RAM',
        'val' => '512',
        'unit' => 'Bytes',
      ),
      3 => 
      array (
        'param' => 'Data EEPROM',
        'val' => '256',
        'unit' => 'Bytes',
      ),
    ),
    'notes' => 
    array (
      0 => 'High Performance PIC18 Core, USB v2.0 compliant interface',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'VCC',
        2 => 'RA5/OSC1/CLKIN',
        3 => 'RA4/AN3/OSC2/CLKOUT',
        4 => 'RA3/~MCLR~/VPP',
        5 => 'RC5/CCP1/P1A/T0CKI',
        6 => 'RC4/P1B/C12OUT/SRQ',
        7 => 'RC3/AN7/P1C/C12IN3-/PGM',
        8 => 'RC6/AN8/~SS~/T13CKI/T1OSCI',
        9 => 'RC7/AN9/SDO/T1OSCO',
        10 => 'RB7/TX/CK',
        11 => 'RB6/SCK/SCI',
        12 => 'RB5/AN11/RX/DT',
        13 => 'RB4/AN10/SDI/SDA',
        14 => 'RC2/AN6/P1D/C12IN2-/CVREF/INT2',
        15 => 'RC1/AN5/C12IN-/INT1/VREF-',
        16 => 'RC0/AN4/C12IN+/INT0/VREF+',
        17 => 'VUSB',
        18 => 'RA1/D-/PGC',
        19 => 'RA0/D+/PGD',
        20 => 'GND',
      ),
    ),
  ),
  'PIC18F4550' => 
  array (
    'description' => 'PIC18F4550',
    'aliases' => 
    array (
    ),
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/39632e.pdf',
    'pins' => 
    array (
      '~MCLR~/V__PP/RE3' => 
      array (
        'desc' => '.',
      ),
      'RA0/AN0' => 
      array (
        'desc' => '.',
      ),
      'RA1/AN1' => 
      array (
        'desc' => '.',
      ),
      'RA2/AN2/V__REF-/CV__REF' => 
      array (
        'desc' => '.',
      ),
      'RA3/AN3/V__REF+' => 
      array (
        'desc' => '.',
      ),
      'RA4/T0CKI/C1OUT/RCV' => 
      array (
        'desc' => '.',
      ),
      'RA5/AN4/~SS~/HLVDIN/C2OUT' => 
      array (
        'desc' => '.',
      ),
      'RE0/AN5/CK1SPP' => 
      array (
        'desc' => '.',
      ),
      'RE1/AN6/CK2SPP' => 
      array (
        'desc' => '.',
      ),
      'RE2/AN7/OESPP' => 
      array (
        'desc' => '.',
      ),
      'V__DD' => 
      array (
        'desc' => 'Positive supply for logic and I/O pins.',
      ),
      'V__SS' => 
      array (
        'desc' => 'Ground reference for logic and I/O pins.',
      ),
      'OSC1/CLKI' => 
      array (
        'desc' => '.',
      ),
      'OSC2/CLKO/RA6' => 
      array (
        'desc' => '.',
      ),
      'RC0/T1OSO/T13CKI' => 
      array (
        'desc' => '.',
      ),
      'RC1/T1OSI/CPP2/~UOE~' => 
      array (
        'desc' => '.',
      ),
      'RC2/CCP1/P1A' => 
      array (
        'desc' => '.',
      ),
      'V__USB' => 
      array (
        'desc' => 'Internal USB 3.3V voltage regulator.',
      ),
      'RD0/SPP0' => 
      array (
        'desc' => '.',
      ),
      'RD1/SPP1' => 
      array (
        'desc' => '.',
      ),
      'RD2/SPP2' => 
      array (
        'desc' => '.',
      ),
      'RD3/SPP3' => 
      array (
        'desc' => '.',
      ),
      'RC4/D__-/VM' => 
      array (
        'desc' => '.',
      ),
      'RC5/D__+/VP' => 
      array (
        'desc' => '.',
      ),
      'RC6/TX/CK' => 
      array (
        'desc' => '.',
      ),
      'RC7/RX/DT/SDO' => 
      array (
        'desc' => '.',
      ),
      'RD4/SPP4' => 
      array (
        'desc' => '.',
      ),
      'RD5/SPP5/P1B' => 
      array (
        'desc' => '.',
      ),
      'RD6/SPP6/P1C' => 
      array (
        'desc' => '.',
      ),
      'RD7/SPP7/P1D' => 
      array (
        'desc' => '.',
      ),
      'RB0/AN12/INT0/FLT0/SDI/SDA' => 
      array (
        'desc' => '.',
      ),
      'RB1/AN10/INT1/SCK/SCL' => 
      array (
        'desc' => '.',
      ),
      'RB2/AN8/INT2/VMO' => 
      array (
        'desc' => '.',
      ),
      'RB3/AN9/CCP2/VPO' => 
      array (
        'desc' => '.',
      ),
      'RB4/AN11/KBI0/CSSPP' => 
      array (
        'desc' => '.',
      ),
      'RB5/KBI1/PGM' => 
      array (
        'desc' => '.',
      ),
      'RB6/KBI2/PGC' => 
      array (
        'desc' => '.',
      ),
      'RB6/KBI3/PGD' => 
      array (
        'desc' => '.',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => '(optional) parameter name',
        'val' => '123',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~MCLR~/V__PP/RE3',
        2 => 'RA0/AN0',
        3 => 'RA1/AN1',
        4 => 'RA2/AN2/V__REF-/CV__REF',
        5 => 'RA3/AN3/V__REF+',
        6 => 'RA4/T0CKI/C1OUT/RCV',
        7 => 'RA5/AN4/~SS~/HLVDIN/C2OUT',
        8 => 'RE0/AN5/CK1SPP',
        9 => 'RE1/AN6/CK2SPP',
        10 => 'RE2/AN7/OESPP',
        11 => 'V__DD',
        12 => 'V__SS',
        13 => 'OSC1/CLKI',
        14 => 'OSC2/CLKO/RA6',
        15 => 'RC0/T1OSO/T13CKI',
        16 => 'RC1/T1OSI/CPP2/~UOE~',
        17 => 'RC2/CCP1/P1A',
        18 => 'V__USB',
        19 => 'RD0/SPP0',
        20 => 'RD1/SPP1',
        21 => 'RD2/SPP2',
        22 => 'RD3/SPP3',
        23 => 'RC4/D__-/VM',
        24 => 'RC5/D__+/VP',
        25 => 'RC6/TX/CK',
        26 => 'RC7/RX/DT/SDO',
        27 => 'RD4/SPP4',
        28 => 'RD5/SPP5/P1B',
        29 => 'RD6/SPP6/P1C',
        30 => 'RD7/SPP7/P1D',
        31 => 'V__SS',
        32 => 'V__DD',
        33 => 'RB0/AN12/INT0/FLT0/SDI/SDA',
        34 => 'RB1/AN10/INT1/SCK/SCL',
        35 => 'RB2/AN8/INT2/VMO',
        36 => 'RB3/AN9/CCP2/VPO',
        37 => 'RB4/AN11/KBI0/CSSPP',
        38 => 'RB5/KBI1/PGM',
        39 => 'RB6/KBI2/PGC',
        40 => 'RB6/KBI3/PGD',
      ),
    ),
  ),
  'PS2501' => 
  array (
    'description' => '4-channel optoisolator',
    'family' => 'CEL',
    'datasheet' => 'http://www.cel.com/pdf/datasheets/ps2501.pdf',
    'pins' => 
    array (
      '+1' => 
      array (
        'desc' => 'anode 1',
      ),
      -1 => 
      array (
        'desc' => 'cathode 1',
      ),
      '+2' => 
      array (
        'desc' => 'anode 2',
      ),
      -2 => 
      array (
        'desc' => 'cathode 2',
      ),
      '+3' => 
      array (
        'desc' => 'anode 3',
      ),
      -3 => 
      array (
        'desc' => 'cathode 3',
      ),
      '+4' => 
      array (
        'desc' => 'anode 4',
      ),
      -4 => 
      array (
        'desc' => 'cathode 4',
      ),
      'E4' => 
      array (
        'desc' => 'emitter 4',
      ),
      'C4' => 
      array (
        'desc' => 'collector 4',
      ),
      'E3' => 
      array (
        'desc' => 'emitter 3',
      ),
      'C3' => 
      array (
        'desc' => 'collector 3',
      ),
      'E2' => 
      array (
        'desc' => 'emitter 2',
      ),
      'C2' => 
      array (
        'desc' => 'collector 2',
      ),
      'E1' => 
      array (
        'desc' => 'emitter 1',
      ),
      'C1' => 
      array (
        'desc' => 'collector 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Isolation voltage',
        'val' => '5000',
        'unit' => 'Vrms',
      ),
      1 => 
      array (
        'param' => 'Maximum collector-emitter voltage',
        'val' => '80',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Switching time',
        'val' => 
        array (
          0 => '3 (rising)',
          1 => '5 (falling)',
        ),
        'unit' => 'µs',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '+1',
        2 => '-1',
        3 => '+2',
        4 => '-2',
        5 => '+3',
        6 => '-3',
        7 => '+4',
        8 => '-4',
        9 => 'E4',
        10 => 'C4',
        11 => 'E3',
        12 => 'C3',
        13 => 'E2',
        14 => 'C2',
        15 => 'E1',
        16 => 'C1',
      ),
    ),
  ),
  'SN754410' => 
  array (
    'description' => 'Quadruple half-H driver',
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/sn754410.pdf',
    'pins' => 
    array (
      '1,2EN' => 
      array (
        'desc' => 'enable (drivers 1 and 2)',
      ),
      '1A' => 
      array (
        'desc' => 'input 1',
      ),
      '1Y' => 
      array (
        'desc' => 'driver 1 output',
      ),
      'GND' => 
      array (
        'desc' => 'ground (heat sink)',
      ),
      '2Y' => 
      array (
        'desc' => 'driver 2 output',
      ),
      '2A' => 
      array (
        'desc' => 'input 2',
      ),
      'V__CC2' => 
      array (
        'desc' => 'output supply voltage',
      ),
      '3,4EN' => 
      array (
        'desc' => 'enable (drivers 3 and 4)',
      ),
      '3A' => 
      array (
        'desc' => 'input 3',
      ),
      '3Y' => 
      array (
        'desc' => 'driver 3 output',
      ),
      '4Y' => 
      array (
        'desc' => 'driver 4 output',
      ),
      '4A' => 
      array (
        'desc' => 'input 4',
      ),
      'V__CC1' => 
      array (
        'desc' => 'logic supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '4.5 (min)',
          1 => '36 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum output current per driver',
        'val' => '1',
        'unit' => 'A',
      ),
    ),
    'notes' => 
    array (
      0 => 'When an EN line is low, the corresponding outputs assume a high-impedance off state.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1,2EN',
        2 => '1A',
        3 => '1Y',
        4 => 'GND',
        5 => 'GND',
        6 => '2Y',
        7 => '2A',
        8 => 'V__CC2',
        9 => '3,4EN',
        10 => '3A',
        11 => '3Y',
        12 => 'GND',
        13 => 'GND',
        14 => '4Y',
        15 => '4A',
        16 => 'V__CC1',
      ),
    ),
  ),
  'SN75468' => 
  array (
    'description' => 'Seven darlington array',
    'aliases' => 
    array (
      0 => 'SN75469',
    ),
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/sn75468.pdf',
    'pins' => 
    array (
      '1B' => 
      array (
        'desc' => 'base 1',
      ),
      '2B' => 
      array (
        'desc' => 'base 2',
      ),
      '3B' => 
      array (
        'desc' => 'base 3',
      ),
      '4B' => 
      array (
        'desc' => 'base 4',
      ),
      '5B' => 
      array (
        'desc' => 'base 5',
      ),
      '6B' => 
      array (
        'desc' => 'base 6',
      ),
      '7B' => 
      array (
        'desc' => 'base 7',
      ),
      'E' => 
      array (
        'desc' => 'common emitter (ground)',
      ),
      'COM' => 
      array (
        'desc' => 'common',
      ),
      '7C' => 
      array (
        'desc' => 'collector 7',
      ),
      '6C' => 
      array (
        'desc' => 'collector 6',
      ),
      '5C' => 
      array (
        'desc' => 'collector 5',
      ),
      '4C' => 
      array (
        'desc' => 'collector 4',
      ),
      '3C' => 
      array (
        'desc' => 'collector 3',
      ),
      '2C' => 
      array (
        'desc' => 'collector 2',
      ),
      '1C' => 
      array (
        'desc' => 'collector 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Series resistance at bases',
        'val' => 
        array (
          0 => '2.7 (SN75468)',
          1 => '10.5 (SN75469)',
        ),
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'Maximum collector-emitter voltage',
        'val' => '100',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '30',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Maximum peak collector current',
        'val' => '500',
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'SN75468 is designed for use with 5V TTL/CMOS devices.',
      1 => 'SN75469 is designed for use with 6V-15V CMOS/PMOS devices.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1B',
        2 => '2B',
        3 => '3B',
        4 => '4B',
        5 => '5B',
        6 => '6B',
        7 => '7B',
        8 => 'E',
        9 => 'COM',
        10 => '7C',
        11 => '6C',
        12 => '5C',
        13 => '4C',
        14 => '3C',
        15 => '2C',
        16 => '1C',
      ),
    ),
  ),
  'TC649' => 
  array (
    'description' => 'PWM fan speed controller',
    'aliases' => 
    array (
    ),
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21449c.pdf',
    'pins' => 
    array (
      'V__IN' => 
      array (
        'desc' => 'temperature sensor; voltage range of 1.25V to 2.65V (typical)',
      ),
      'C__F' => 
      array (
        'desc' => 'positive terminal for PWM ramp generator timing capacitor; 1 µF for 30 Hz PWM',
      ),
      'V__AS' => 
      array (
        'desc' => 'auto-shutdown voltage; auto-shutdown occurs when V__IN <= V__AS',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'SENSE' => 
      array (
        'desc' => 'fan rotation pulses; absense of pulses indicates a fault',
      ),
      '~FAULT~' => 
      array (
        'desc' => 'goes low to indicate a fault condition',
      ),
      'V__OUT' => 
      array (
        'desc' => 'active high complimentary output that drives the fan motor through an NPN transistor or N-channel MOSFET',
      ),
      'V__DD' => 
      array (
        'desc' => 'power supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'supply voltage',
        'val' => '6',
        'unit' => 'V',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'V__IN',
        2 => 'C__F',
        3 => 'V__AS',
        4 => 'GND',
        5 => 'SENSE',
        6 => '~FAULT~',
        7 => 'V__OUT',
        8 => 'V__DD',
      ),
    ),
  ),
  'TIL311' => 
  array (
    'description' => 'Hexadecimal display with logic',
    'family' => 'LED',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/til311.pdf',
    'pins' => 
    array (
      'V__LED' => 
      array (
        'desc' => 'LED supply voltage',
      ),
      'B' => 
      array (
        'desc' => 'Latch data input B',
      ),
      'A' => 
      array (
        'desc' => 'Latch data input A',
      ),
      'DP__L' => 
      array (
        'desc' => 'Left decimal point cathode',
      ),
      '~STROBE' => 
      array (
        'desc' => 'Latch strobe input (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'BLANK' => 
      array (
        'desc' => 'Display blanking input (active high)',
      ),
      'DP__R' => 
      array (
        'desc' => 'Right decimal point cathode',
      ),
      'D' => 
      array (
        'desc' => 'Latch data input D',
      ),
      'C' => 
      array (
        'desc' => 'Latch data input C',
      ),
      'Vcc' => 
      array (
        'desc' => 'Logic supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Decimal points are driven independently and current-limiting resistors (typically 1kΩ) are required.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'V__LED',
        2 => 'B',
        3 => 'A',
        4 => 'DP__L',
        5 => '~STROBE',
        6 => 'NOT_PRESENT',
        7 => 'GND',
        8 => 'BLANK',
        9 => 'NOT_PRESENT',
        10 => 'DP__R',
        11 => 'NOT_PRESENT',
        12 => 'D',
        13 => 'C',
        14 => 'Vcc',
      ),
    ),
  ),
  'TL081' => 
  array (
    'description' => 'JFET-input operational amplifier',
    'aliases' => 
    array (
      0 => 'TL061',
      1 => 'TL071',
    ),
    'family' => 'linear',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/tl08a.pdf',
    'pins' => 
    array (
      'OFFSET N1' => 
      array (
        'desc' => 'offset',
      ),
      'IN-' => 
      array (
        'desc' => 'inverting input',
      ),
      'IN+' => 
      array (
        'desc' => 'non-inverting input',
      ),
      'V__CC-' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      'OFFSET N2' => 
      array (
        'desc' => 'offset',
      ),
      'OUT' => 
      array (
        'desc' => 'output',
      ),
      'V__CC+' => 
      array (
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '3',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '3',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate at unity gain',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Rise time',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '0.1 (TL07x)',
          2 => '0.05 (TL08x)',
        ),
        'unit' => 'µs',
      ),
      5 => 
      array (
        'param' => 'Overshoot factor',
        'val' => 
        array (
          0 => '10 (TL061x',
          1 => '20 (TL07x)',
          2 => '20 (TL08x)',
        ),
        'unit' => '%',
      ),
      6 => 
      array (
        'param' => 'Equivalent input noise voltage at f = 1 kHz',
        'val' => 
        array (
          0 => '42 (TL06x)',
          1 => '18 (TL07x)',
          2 => '18 (TL08x)',
        ),
        'unit' => 'nV/√~Hz~',
      ),
      7 => 
      array (
        'param' => 'Supply current (each amplifier)',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '1.4 (TL07x)',
          2 => '1.4 (TL08x)',
        ),
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'The TL06x series are low-power versions of the TL08x series.',
      1 => 'The TL07x series are low-noise versions of the TL08x series.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'OFFSET N1',
        2 => 'IN-',
        3 => 'IN+',
        4 => 'V__CC-',
        5 => 'OFFSET N2',
        6 => 'OUT',
        7 => 'V__CC+',
        8 => 'NC',
      ),
    ),
  ),
  'TL082' => 
  array (
    'description' => 'Dual JFET-input operational amplifier',
    'aliases' => 
    array (
      0 => 'TL062',
      1 => 'TL072',
    ),
    'family' => 'linear',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/tl081a.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'V__CC-' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      'V__CC+' => 
      array (
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '3',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '3',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate at unity gain',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Rise time',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '0.1 (TL07x)',
          2 => '0.05 (TL08x)',
        ),
        'unit' => 'µs',
      ),
      5 => 
      array (
        'param' => 'Overshoot factor',
        'val' => 
        array (
          0 => '10 (TL061x)',
          1 => '20 (TL07x)',
          2 => '20 (TL08x)',
        ),
        'unit' => '%',
      ),
      6 => 
      array (
        'param' => 'Equivalent input noise voltage at f = 1 kHz',
        'val' => 
        array (
          0 => '42 (TL06x)',
          1 => '18 (TL07x)',
          2 => '18 (TL08x)',
        ),
        'unit' => 'nV/√Hz',
      ),
      7 => 
      array (
        'param' => 'Supply current (each amplifier)',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '1.4 (TL07x)',
          2 => '1.4 (TL08x)',
        ),
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'The TL06x series are low-power versions of the TL08x series.',
      1 => 'The TL07x series are low-noise versions of the TL08x series.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'V__CC-',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => 'V__CC+',
      ),
    ),
  ),
  'TL084' => 
  array (
    'description' => 'Quad JFET-input operational amplifier',
    'aliases' => 
    array (
      0 => 'TL064',
      1 => 'TL074',
    ),
    'family' => 'linear',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/tl081a.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'output 1',
      ),
      '1IN-' => 
      array (
        'desc' => 'inverting input 1',
      ),
      '1IN+' => 
      array (
        'desc' => 'non-inverting input 1',
      ),
      'V__CC+' => 
      array (
        'desc' => 'positive supply voltage',
      ),
      '2IN+' => 
      array (
        'desc' => 'non-inverting input 2',
      ),
      '2IN-' => 
      array (
        'desc' => 'inverting input 2',
      ),
      '2OUT' => 
      array (
        'desc' => 'output 2',
      ),
      '3OUT' => 
      array (
        'desc' => 'output 3',
      ),
      '3IN-' => 
      array (
        'desc' => 'inverting input 3',
      ),
      '3IN+' => 
      array (
        'desc' => 'non-inverting input 3',
      ),
      'V__CC-' => 
      array (
        'desc' => 'negative supply voltage',
      ),
      '4IN+' => 
      array (
        'desc' => 'non-inverting input 4',
      ),
      '4IN-' => 
      array (
        'desc' => 'inverting input 4',
      ),
      '4OUT' => 
      array (
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '3',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '3',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate at unity gain',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Rise time',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '0.1 (TL07x)',
          2 => '0.05 (TL08x)',
        ),
        'unit' => 'µs',
      ),
      5 => 
      array (
        'param' => 'Overshoot factor',
        'val' => 
        array (
          0 => '10 (TL061x',
          1 => '20 (TL07x)',
          2 => '20 (TL08x)',
        ),
        'unit' => '%',
      ),
      6 => 
      array (
        'param' => 'Equivalent input noise voltage at f = 1 kHz',
        'val' => 
        array (
          0 => '42 (TL06x)',
          1 => '18 (TL07x)',
          2 => '18 (TL08x)',
        ),
        'unit' => 'nV/√Hz',
      ),
      7 => 
      array (
        'param' => 'Supply current (each amplifier)',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '1.4 (TL07x)',
          2 => '1.4 (TL08x)',
        ),
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'The TL06x series are low-power versions of the TL08x series.',
      1 => 'The TL07x series are low-noise versions of the TL08x series.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'V__CC+',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => '3OUT',
        9 => '3IN-',
        10 => '3IN+',
        11 => 'V__CC-',
        12 => '4IN+',
        13 => '4IN-',
        14 => '4OUT',
      ),
    ),
  ),
  'TLC272' => 
  array (
    'name' => 'TLC272',
    'description' => 'Precision JFET-input low-offset dual operation amplifier',
    'aliases' => 
    array (
    ),
    'family' => 'opamps',
    'datasheet' => 'http://www.hep.upenn.edu/SNO/daq/parts/tlc272.pdf',
    'pins' => 
    array (
      '1OUT' => 
      array (
        'desc' => 'First opamp output',
      ),
      '1IN-' => 
      array (
        'desc' => 'First opamp inverting input',
      ),
      '1IN+' => 
      array (
        'desc' => 'First opamp non-inverting input',
      ),
      'GND' => 
      array (
        'desc' => 'Ground',
      ),
      '2IN+' => 
      array (
        'desc' => 'Second opamp non-inverting input',
      ),
      '2IN-' => 
      array (
        'desc' => 'Second opamp inverting input',
      ),
      '2OUT' => 
      array (
        'desc' => 'Second opamp output',
      ),
      'V__DD' => 
      array (
        'desc' => 'Supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum offset voltage (trimmed)',
        'val' => '500',
        'unit' => 'µV',
      ),
      1 => 
      array (
        'param' => 'Supply voltage (absolute maximum)',
        'val' => '18',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Slew rate at unity gain (V__DD = 5V, V__IPP = 1V)',
        'val' => '3.6',
        'unit' => 'V/µs',
      ),
      3 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '1.7',
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Pinout LM358 compatible',
      1 => 'Designed for high-impedance measurement applications',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1OUT',
        2 => '1IN-',
        3 => '1IN+',
        4 => 'GND',
        5 => '2IN+',
        6 => '2IN-',
        7 => '2OUT',
        8 => 'V__DD',
      ),
    ),
  ),
  'TMS9918A' => 
  array (
    'description' => 'Video Display Processor (composite output)',
    'aliases' => 
    array (
    ),
    'family' => 'Texas Instruments',
    'datasheet' => 'http://www.cs.columbia.edu/~sedwards/papers/TMS9918.pdf',
    'pins' => 
    array (
      '~RAS' => 
      array (
        'desc' => 'VRAM row address strobe',
      ),
      '~CAS' => 
      array (
        'desc' => 'VRAM column address strobe',
      ),
      'AD7' => 
      array (
        'desc' => 'VRAM address/data bus (least significant bit)',
      ),
      'AD6' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD5' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD4' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD3' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD2' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD1' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD0' => 
      array (
        'desc' => 'VRAM address/data bus (most significant bit)',
      ),
      'R/~W' => 
      array (
        'desc' => 'VRAM write strobe',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'MODE' => 
      array (
        'desc' => 'CPU interface mode select (usu. a CPU address line)',
      ),
      '~CSW' => 
      array (
        'desc' => 'CPU-VDP write strobe',
      ),
      '~CSR' => 
      array (
        'desc' => 'CPU-VDP read strobe',
      ),
      '~INT' => 
      array (
        'desc' => 'CPU interrupt output',
      ),
      'CD7' => 
      array (
        'desc' => 'CPU data bus (least significant bit)',
      ),
      'CD6' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD5' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD4' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD3' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD2' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD1' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD0' => 
      array (
        'desc' => 'CPU data bus (most significant bit)',
      ),
      'RD7' => 
      array (
        'desc' => 'VRAM read data bus (least significant bit)',
      ),
      'RD6' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD5' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD4' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD3' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD2' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD1' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD0' => 
      array (
        'desc' => 'VRAM read data bus (most significant bit)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      '~RESET~/SYNC' => 
      array (
        'desc' => 'reset (active low; when above +9V, sync input for ext. video)',
      ),
      'EXTVDP' => 
      array (
        'desc' => 'external VDP input',
      ),
      'COMVID' => 
      array (
        'desc' => 'composite video output',
      ),
      'GROMCLK' => 
      array (
        'desc' => 'VDP output clock; XTAL/24',
      ),
      'CPUCLK' => 
      array (
        'desc' => 'VDP color burst frequency clock',
      ),
      'XTAL1' => 
      array (
        'desc' => 'crystal input',
      ),
      'XTAL2' => 
      array (
        'desc' => 'crystal input',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'XTAL frequency',
        'val' => '10.738635 ± 0.05%',
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'XTAL load capacitors',
        'val' => 
        array (
          0 => '15 (min)',
          1 => '39 (max)',
        ),
        'unit' => 'pF',
      ),
      2 => 
      array (
        'param' => 'VRAM size',
        'val' => '4 or 16',
        'unit' => 'KB',
      ),
      3 => 
      array (
        'param' => 'Number of colors',
        'val' => '15 plus transparent',
      ),
      4 => 
      array (
        'param' => 'Number of sprites',
        'val' => '32',
      ),
      5 => 
      array (
        'param' => 'Sprites per line',
        'val' => '4',
      ),
    ),
    'notes' => 
    array (
      0 => 'Bit order numbering is backwards. 0 is the MSB and 7 is the LSB.',
      1 => 'Write to control register: set MODE high, write data byte, write destination register in the format 10000RRR.',
      2 => 'Write to VRAM: set MODE high, write lower address bits, write upper address bits (with highest bits set to 01), set MODE low, write data bytes. Address autoincrements.',
      3 => 'Read from status register: set MODE high, read byte.',
      4 => 'Read from VRAM: write lower address bits, write upper address bits (with highest bits set to 00), set MODE low, read data bytes. Address autoincrements.',
      5 => 'MODE determines the source or destination of a CPU read/write data transfer.',
      6 => 'Control registers:
<table>
<tr><td>0</td><td>VDP option control bits (mode, external VDP enable)</td></tr>
<tr><td>1</td><td>VDP option control bits (4/16K RAM, BLANK, interrupt enable, mode, sprite size, magnification)</td></tr>
<tr><td>2</td><td>Name table base address (0-15)</td></tr>
<tr><td>3</td><td>Color table base address (0-255)</td></tr>
<tr><td>4</td><td>Pattern generator base address (0-7)</td></tr>
<tr><td>5</td><td>Sprite attribute table base address (0-127)</td></tr>
<tr><td>6</td><td>Sprite pattern generator base address (0-7)</td></tr>
<tr><td>7</td><td>Text color, backdrop color</td></tr>
</table>',
      7 => 'Graphics modes:
<table>
<tr><td>Text mode</td><td>40x24 text positions, 6x8-pixel patterns, two colors, no sprites</td></tr>
<tr><td>Graphics I mode</td><td>32x24 tile positions, 8x8-pixel patterns, 256 possible patterns with 2 colors per pattern, sprites</td></tr>
<tr><td>Graphics II mode</td><td>32x24 tile positions, 8x8-pixel patterns, 768 possible patterns with 2 colors per row, sprites</td></tr>
<tr><td>Multicolor mode</td><td>64x48 solid 4x4-pixel blocks of any color, sprites</td></tr>
</table>',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~RAS',
        2 => '~CAS',
        3 => 'AD7',
        4 => 'AD6',
        5 => 'AD5',
        6 => 'AD4',
        7 => 'AD3',
        8 => 'AD2',
        9 => 'AD1',
        10 => 'AD0',
        11 => 'R/~W',
        12 => 'GND',
        13 => 'MODE',
        14 => '~CSW',
        15 => '~CSR',
        16 => '~INT',
        17 => 'CD7',
        18 => 'CD6',
        19 => 'CD5',
        20 => 'CD4',
        21 => 'CD3',
        22 => 'CD2',
        23 => 'CD1',
        24 => 'CD0',
        25 => 'RD7',
        26 => 'RD6',
        27 => 'RD5',
        28 => 'RD4',
        29 => 'RD3',
        30 => 'RD2',
        31 => 'RD1',
        32 => 'RD0',
        33 => 'Vcc',
        34 => '~RESET~/SYNC',
        35 => 'EXTVDP',
        36 => 'COMVID',
        37 => 'GROMCLK',
        38 => 'CPUCLK',
        39 => 'XTAL1',
        40 => 'XTAL2',
      ),
    ),
  ),
  'TMS9928A' => 
  array (
    'description' => 'Video Display Processor (component output)',
    'aliases' => 
    array (
      0 => 'TMS9929A',
    ),
    'family' => 'Texas Instruments',
    'datasheet' => 'http://www.cs.columbia.edu/~sedwards/papers/TMS9918.pdf',
    'pins' => 
    array (
      '~RAS' => 
      array (
        'desc' => 'VRAM row address strobe',
      ),
      '~CAS' => 
      array (
        'desc' => 'VRAM column address strobe',
      ),
      'AD7' => 
      array (
        'desc' => 'VRAM address/data bus (least significant bit)',
      ),
      'AD6' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD5' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD4' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD3' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD2' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD1' => 
      array (
        'desc' => 'VRAM address/data bus',
      ),
      'AD0' => 
      array (
        'desc' => 'VRAM address/data bus (most significant bit)',
      ),
      'R/~W' => 
      array (
        'desc' => 'VRAM write strobe',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'MODE' => 
      array (
        'desc' => 'CPU interface mode select (usu. a CPU address line)',
      ),
      '~CSW' => 
      array (
        'desc' => 'CPU-VDP write strobe',
      ),
      '~CSR' => 
      array (
        'desc' => 'CPU-VDP read strobe',
      ),
      '~INT' => 
      array (
        'desc' => 'CPU interrupt output',
      ),
      'CD7' => 
      array (
        'desc' => 'CPU data bus (least significant bit)',
      ),
      'CD6' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD5' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD4' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD3' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD2' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD1' => 
      array (
        'desc' => 'CPU data bus',
      ),
      'CD0' => 
      array (
        'desc' => 'CPU data bus (most significant bit)',
      ),
      'RD7' => 
      array (
        'desc' => 'VRAM read data bus (least significant bit)',
      ),
      'RD6' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD5' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD4' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD3' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD2' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD1' => 
      array (
        'desc' => 'VRAM read data bus',
      ),
      'RD0' => 
      array (
        'desc' => 'VRAM read data bus (most significant bit)',
      ),
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      '~RESET~/SYNC' => 
      array (
        'desc' => 'reset (active low; when above +9V, sync input for ext. video)',
      ),
      'B-Y' => 
      array (
        'desc' => 'B-Y color difference output',
      ),
      'Y' => 
      array (
        'desc' => 'luminance/sync output',
      ),
      'GROMCLK' => 
      array (
        'desc' => 'VDP output clock; XTAL/24',
      ),
      'R-Y' => 
      array (
        'desc' => 'R-Y color difference output',
      ),
      'XTAL1' => 
      array (
        'desc' => 'crystal input',
      ),
      'XTAL2' => 
      array (
        'desc' => 'crystal input',
      ),
    ),
    'notes' => 
    array (
      0 => 'See <a href=\'TMS9918A\'>TMS9918A</a>',
      1 => 'TMS9928A outputs 60Hz video, TMS9929A outputs 50Hz video',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '~RAS',
        2 => '~CAS',
        3 => 'AD7',
        4 => 'AD6',
        5 => 'AD5',
        6 => 'AD4',
        7 => 'AD3',
        8 => 'AD2',
        9 => 'AD1',
        10 => 'AD0',
        11 => 'R/~W',
        12 => 'GND',
        13 => 'MODE',
        14 => '~CSW',
        15 => '~CSR',
        16 => '~INT',
        17 => 'CD7',
        18 => 'CD6',
        19 => 'CD5',
        20 => 'CD4',
        21 => 'CD3',
        22 => 'CD2',
        23 => 'CD1',
        24 => 'CD0',
        25 => 'RD7',
        26 => 'RD6',
        27 => 'RD5',
        28 => 'RD4',
        29 => 'RD3',
        30 => 'RD2',
        31 => 'RD1',
        32 => 'RD0',
        33 => 'Vcc',
        34 => '~RESET~/SYNC',
        35 => 'B-Y',
        36 => 'Y',
        37 => 'GROMCLK',
        38 => 'R-Y',
        39 => 'XTAL1',
        40 => 'XTAL2',
      ),
    ),
  ),
  'TPIC6B595' => 
  array (
    'description' => 'Power logic 8-bit shift register',
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/tpic6b595.pdf',
    'pins' => 
    array (
      'Vcc' => 
      array (
        'desc' => 'supply voltage',
      ),
      'SER IN' => 
      array (
        'desc' => 'serial data input',
      ),
      'DRAIN0' => 
      array (
        'desc' => 'drain output',
      ),
      'DRAIN1' => 
      array (
        'desc' => 'drain output',
      ),
      'DRAIN2' => 
      array (
        'desc' => 'drain output',
      ),
      'DRAIN3' => 
      array (
        'desc' => 'drain output',
      ),
      '~SRCLR' => 
      array (
        'desc' => 'clear (active low)',
      ),
      '~G' => 
      array (
        'desc' => 'output enable (active low)',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'RCK' => 
      array (
        'desc' => 'storage register latch input',
      ),
      'SRCK' => 
      array (
        'desc' => 'shift register clock input',
      ),
      'DRAIN4' => 
      array (
        'desc' => 'drain output',
      ),
      'DRAIN5' => 
      array (
        'desc' => 'drain output',
      ),
      'DRAIN6' => 
      array (
        'desc' => 'drain output',
      ),
      'DRAIN7' => 
      array (
        'desc' => 'drain output',
      ),
      'SER OUT' => 
      array (
        'desc' => 'serial data output',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum continuous current (per output)',
        'val' => '150',
        'unit' => 'mA',
      ),
      1 => 
      array (
        'param' => 'Current limit (per output)',
        'val' => '500',
        'unit' => 'mA',
      ),
      2 => 
      array (
        'param' => 'Maximum drain-to-source voltage',
        'val' => '50',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Drain output rise/fall time',
        'val' => '200',
        'unit' => 'ns',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'NC',
        2 => 'Vcc',
        3 => 'SER IN',
        4 => 'DRAIN0',
        5 => 'DRAIN1',
        6 => 'DRAIN2',
        7 => 'DRAIN3',
        8 => '~SRCLR',
        9 => '~G',
        10 => 'GND',
        11 => 'GND',
        12 => 'RCK',
        13 => 'SRCK',
        14 => 'DRAIN4',
        15 => 'DRAIN5',
        16 => 'DRAIN6',
        17 => 'DRAIN7',
        18 => 'SER OUT',
        19 => 'GND',
        20 => 'NC',
      ),
    ),
  ),
  'ULN2003' => 
  array (
    'description' => 'Seven darlington array',
    'aliases' => 
    array (
      0 => 'ULN2002',
      1 => 'ULN2004',
    ),
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/uln2003a.pdf',
    'pins' => 
    array (
      '1B' => 
      array (
        'desc' => 'base 1',
      ),
      '2B' => 
      array (
        'desc' => 'base 2',
      ),
      '3B' => 
      array (
        'desc' => 'base 3',
      ),
      '4B' => 
      array (
        'desc' => 'base 4',
      ),
      '5B' => 
      array (
        'desc' => 'base 5',
      ),
      '6B' => 
      array (
        'desc' => 'base 6',
      ),
      '7B' => 
      array (
        'desc' => 'base 7',
      ),
      'E' => 
      array (
        'desc' => 'common emitter (ground)',
      ),
      'COM' => 
      array (
        'desc' => 'common',
      ),
      '7C' => 
      array (
        'desc' => 'collector 7',
      ),
      '6C' => 
      array (
        'desc' => 'collector 6',
      ),
      '5C' => 
      array (
        'desc' => 'collector 5',
      ),
      '4C' => 
      array (
        'desc' => 'collector 4',
      ),
      '3C' => 
      array (
        'desc' => 'collector 3',
      ),
      '2C' => 
      array (
        'desc' => 'collector 2',
      ),
      '1C' => 
      array (
        'desc' => 'collector 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Series resistance at bases',
        'val' => 
        array (
          0 => 'n/a (ULN2002)',
          1 => '2.7 (ULN2003)',
          2 => '10.5 (ULN2004)',
        ),
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'Maximum collector-emitter voltage',
        'val' => '50',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '30',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Maximum peak collector current',
        'val' => '500',
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'ULN2002 is designed for use with 14V to 25V PMOS devices.',
      1 => 'ULN2003 is designed for use with 5V TTL/CMOS devices.',
      2 => 'ULN2004 is designed for use with 6V to 15V CMOS devices.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1B',
        2 => '2B',
        3 => '3B',
        4 => '4B',
        5 => '5B',
        6 => '6B',
        7 => '7B',
        8 => 'E',
        9 => 'COM',
        10 => '7C',
        11 => '6C',
        12 => '5C',
        13 => '4C',
        14 => '3C',
        15 => '2C',
        16 => '1C',
      ),
    ),
  ),
  'ULN2803' => 
  array (
    'description' => 'Eight darlington array',
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/uln2803a.pdf',
    'pins' => 
    array (
      '1B' => 
      array (
        'desc' => 'base 1',
      ),
      '2B' => 
      array (
        'desc' => 'base 2',
      ),
      '3B' => 
      array (
        'desc' => 'base 3',
      ),
      '4B' => 
      array (
        'desc' => 'base 4',
      ),
      '5B' => 
      array (
        'desc' => 'base 5',
      ),
      '6B' => 
      array (
        'desc' => 'base 6',
      ),
      '7B' => 
      array (
        'desc' => 'base 7',
      ),
      '8B' => 
      array (
        'desc' => 'base 8',
      ),
      'GND' => 
      array (
        'desc' => 'ground',
      ),
      'COM' => 
      array (
        'desc' => 'common',
      ),
      '8C' => 
      array (
        'desc' => 'collector 8',
      ),
      '7C' => 
      array (
        'desc' => 'collector 7',
      ),
      '6C' => 
      array (
        'desc' => 'collector 6',
      ),
      '5C' => 
      array (
        'desc' => 'collector 5',
      ),
      '4C' => 
      array (
        'desc' => 'collector 4',
      ),
      '3C' => 
      array (
        'desc' => 'collector 3',
      ),
      '2C' => 
      array (
        'desc' => 'collector 2',
      ),
      '1C' => 
      array (
        'desc' => 'collector 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Series resistance at bases',
        'val' => '2.7',
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'Maximum collector-emitter voltage',
        'val' => '50',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '30',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Maximum continuous collector current',
        'val' => '500',
        'unit' => 'mA',
      ),
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => '1B',
        2 => '2B',
        3 => '3B',
        4 => '4B',
        5 => '5B',
        6 => '6B',
        7 => '7B',
        8 => '8B',
        9 => 'GND',
        10 => 'COM',
        11 => '8C',
        12 => '7C',
        13 => '6C',
        14 => '5C',
        15 => '4C',
        16 => '3C',
        17 => '2C',
        18 => '1C',
      ),
    ),
  ),
  'WIRE' => 
  array (
    'description' => 'A piece of wire',
    'pins' => 
    array (
      'W1' => 
      array (
        'desc' => 'one end of the wire',
      ),
      'W2' => 
      array (
        'desc' => 'the other end of the wire',
      ),
    ),
    'notes' => 
    array (
      0 => 'It\'s pretty handy for connecting stuff.',
      1 => 'Resistance is usually pretty low.',
      2 => 'It bends!',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'W1',
        2 => 'W2',
      ),
    ),
  ),
  'Z80' => 
  array (
    'description' => 'Z-80 Microprocessor',
    'aliases' => 
    array (
    ),
    'family' => 'Zilog',
    'datasheet' => 'http://www.z80.info/zip/z80.pdf',
    'pins' => 
    array (
      'A11' => 
      array (
        'desc' => 'Address Line 11 Output',
      ),
      'A12' => 
      array (
        'desc' => 'Address Line 12 Output',
      ),
      'A13' => 
      array (
        'desc' => 'Address Line 13 Output',
      ),
      'A14' => 
      array (
        'desc' => 'Address Line 14 Output',
      ),
      'A15' => 
      array (
        'desc' => 'Address Line 15 Output',
      ),
      'CLK' => 
      array (
        'desc' => 'Clock Input',
      ),
      'D4' => 
      array (
        'desc' => 'Data Line 4',
      ),
      'D5' => 
      array (
        'desc' => 'Data Line 5',
      ),
      'D3' => 
      array (
        'desc' => 'Data Line 3',
      ),
      'D6' => 
      array (
        'desc' => 'Data Line 6',
      ),
      'Vcc' => 
      array (
        'desc' => 'Power +5V',
      ),
      'D2' => 
      array (
        'desc' => 'Data Line 2',
      ),
      'D7' => 
      array (
        'desc' => 'Data Line 7',
      ),
      'D0' => 
      array (
        'desc' => 'Data Line 0',
      ),
      'D1' => 
      array (
        'desc' => 'Data Line 1',
      ),
      '~INT~' => 
      array (
        'desc' => 'Maskable Interrupt Input (Active Low)',
      ),
      '~NMI~' => 
      array (
        'desc' => 'Non-Maskable Interrupt Input (Active Low)',
      ),
      '~HALT~' => 
      array (
        'desc' => 'Halt State Output (Active Low)',
      ),
      '~MREQ~' => 
      array (
        'desc' => 'Memory Request Output (Active Low)',
      ),
      '~IORQ~' => 
      array (
        'desc' => 'Input/Output Request Output (Active Low)',
      ),
      '~RD~' => 
      array (
        'desc' => 'Read Request Output (Active Low)',
      ),
      '~WR~' => 
      array (
        'desc' => 'Write Request Output (Active Low)',
      ),
      '~BUSACK~' => 
      array (
        'desc' => 'Acknowledge Bus Request for DMA Output (Active Low)',
      ),
      '~WAIT~' => 
      array (
        'desc' => 'Wait Request Input (Active Low)',
      ),
      '~BUSREQ~' => 
      array (
        'desc' => 'Bus Request Input (Active Low)',
      ),
      '~RESET~' => 
      array (
        'desc' => 'Reset Input (Active Low)',
      ),
      '~M1~' => 
      array (
        'desc' => 'Machine Cycle 1 Output (Active Low)',
      ),
      '~RFSH~' => 
      array (
        'desc' => 'Dynamic Memory Refresh Output (Active Low)',
      ),
      'GND' => 
      array (
        'desc' => 'Power Ground',
      ),
      'A0' => 
      array (
        'desc' => 'Address Line 1 Output',
      ),
      'A1' => 
      array (
        'desc' => 'Address Line 1 Output',
      ),
      'A2' => 
      array (
        'desc' => 'Address Line 2 Output',
      ),
      'A3' => 
      array (
        'desc' => 'Address Line 3 Output',
      ),
      'A4' => 
      array (
        'desc' => 'Address Line 4 Output',
      ),
      'A5' => 
      array (
        'desc' => 'Address Line 5 Output',
      ),
      'A6' => 
      array (
        'desc' => 'Address Line 6 Output',
      ),
      'A7' => 
      array (
        'desc' => 'Address Line 7 Output',
      ),
      'A8' => 
      array (
        'desc' => 'Address Line 8 Output',
      ),
      'A9' => 
      array (
        'desc' => 'Address Line 9 Output',
      ),
      'A10' => 
      array (
        'desc' => 'Address Line 10 Output',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum Voltage (Vcc)',
        'val' => '6',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Clock Speed (Original Z-80)',
        'val' => '2',
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Registers:
<table>
<tr><td>A</td><td>Accumulator</td></tr>
<tr><td>F</td><td>Condition Flags</td></tr>
<tr><td>B & C</td><td>General Purpose 8-bit registers (may be used together as a 16-bit register)</td></tr>
<tr><td>D & E</td><td>General Purpose 8-bit registers (may be used together as a 16-bit register)</td></tr>
<tr><td>H & L</td><td>High & Low bytes of 16-bit Address Pointer Register</td></tr>
<tr><td>I</td><td>Interrupt Register - Holds upper 8 bits of memory address for vectored interrupt processing</td></tr>
<tr><td>R</td><td>Refresh Register - Automatically incremented for Dynamic Memory Refresh (read only)</td></tr>
<tr><td>IX & IY</td><td>16-bit Index Registers</td></tr>
<tr><td>SP</td><td>16-bit Stack Pointer Register</td></tr>
<tr><td>PC</td><td>A16-bit Program Counter Register</td></tr>
<tr><td>IFF</td><td>Interrupt Flip Flop Flag</td></tr>
</table>',
      1 => 'All general-purpose registers are duplicated in the prime set (A\', F\',B\', C\', D\', E\', H\', L\')',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'A11',
        2 => 'A12',
        3 => 'A13',
        4 => 'A14',
        5 => 'A15',
        6 => 'CLK',
        7 => 'D4',
        8 => 'D5',
        9 => 'D3',
        10 => 'D6',
        11 => 'Vcc',
        12 => 'D2',
        13 => 'D7',
        14 => 'D0',
        15 => 'D1',
        16 => '~INT~',
        17 => '~NMI~',
        18 => '~HALT~',
        19 => '~MREQ~',
        20 => '~IORQ~',
        21 => '~RD~',
        22 => '~WR~',
        23 => '~BUSACK~',
        24 => '~WAIT~',
        25 => '~BUSREQ~',
        26 => '~RESET~',
        27 => '~M1~',
        28 => '~RFSH~',
        29 => 'GND',
        30 => 'A0',
        31 => 'A1',
        32 => 'A2',
        33 => 'A3',
        34 => 'A4',
        35 => 'A5',
        36 => 'A6',
        37 => 'A7',
        38 => 'A8',
        39 => 'A9',
        40 => 'A10',
      ),
    ),
  ),
  'Z80PIO' => 
  array (
    'description' => 'Z80-PIO',
    'aliases' => 
    array (
    ),
    'family' => 'Zilog',
    'datasheet' => 'http://www.zilog.com/docs/z80/ps0180.pdf',
    'pins' => 
    array (
      'D2' => 
      array (
        'desc' => 'Data Line 2 To CPU (Bi-Directional)',
      ),
      'D7' => 
      array (
        'desc' => 'Data Line 7 To CPU (Bi-Directional)',
      ),
      'D6' => 
      array (
        'desc' => 'Data Line 6 To CPU (Bi-Directional)',
      ),
      '~CE~' => 
      array (
        'desc' => 'Chip Enable Input (Active Low)',
      ),
      'C/~D~' => 
      array (
        'desc' => 'Control/Data Select (High = Ctrl, Low = Data)',
      ),
      'B/~A~' => 
      array (
        'desc' => 'Port A or B Select (Low = A, High = B)',
      ),
      'PA7' => 
      array (
        'desc' => 'Peripheral Port A Line 7 (Bi-Directional)',
      ),
      'PA6' => 
      array (
        'desc' => 'Peripheral Port A Line 6 (Bi-Directional)',
      ),
      'PA5' => 
      array (
        'desc' => 'Peripheral Port A Line 5 (Bi-Directional)',
      ),
      'PA4' => 
      array (
        'desc' => 'Peripheral Port A Line 4 (Bi-Directional)',
      ),
      'GND' => 
      array (
        'desc' => 'Power Ground',
      ),
      'PA3' => 
      array (
        'desc' => 'Peripheral Port A Line 3 (Bi-Directional)',
      ),
      'PA2' => 
      array (
        'desc' => 'Peripheral Port A Line 2 (Bi-Directional)',
      ),
      'PA1' => 
      array (
        'desc' => 'Peripheral Port A Line 1 (Bi-Directional)',
      ),
      'PA0' => 
      array (
        'desc' => 'Peripheral Port A Line 0 (Bi-Directional)',
      ),
      '~ASTB~' => 
      array (
        'desc' => 'Port A Strobe Input from Peripheral (Active Low)',
      ),
      '~BSTB~' => 
      array (
        'desc' => 'Port B Strobe Input from Peripherial (Active Low)',
      ),
      'ARDY' => 
      array (
        'desc' => 'Register A Ready Output (Active High)',
      ),
      'D0' => 
      array (
        'desc' => 'Data Line 0 To CPU (Bi-Directional)',
      ),
      'D1' => 
      array (
        'desc' => 'Data Line 1 To CPU (Bi-Directional)',
      ),
      'BRDY' => 
      array (
        'desc' => 'Register B Ready Output (Active High)',
      ),
      'IEO' => 
      array (
        'desc' => 'Interrupt Enable Output (Active High)',
      ),
      '~INT~' => 
      array (
        'desc' => 'Interrupt Input (Active Low)',
      ),
      'IEI' => 
      array (
        'desc' => 'Interrupt Enable Input (Active High)',
      ),
      'CLK' => 
      array (
        'desc' => 'System Clock Input',
      ),
      '+5V' => 
      array (
        'desc' => 'Power 5V DC',
      ),
      'PB0' => 
      array (
        'desc' => 'Peripheral Port A Line 0 (Bi-Directional)',
      ),
      'PB1' => 
      array (
        'desc' => 'Peripheral Port A Line 1 (Bi-Directional)',
      ),
      'PB2' => 
      array (
        'desc' => 'Peripheral Port A Line 2 (Bi-Directional)',
      ),
      'PB3' => 
      array (
        'desc' => 'Peripheral Port A Line 3 (Bi-Directional)',
      ),
      'PB4' => 
      array (
        'desc' => 'Peripheral Port A Line 4 (Bi-Directional)',
      ),
      'PB5' => 
      array (
        'desc' => 'Peripheral Port A Line 5 (Bi-Directional)',
      ),
      'PB6' => 
      array (
        'desc' => 'Peripheral Port A Line 6 (Bi-Directional)',
      ),
      'PB7' => 
      array (
        'desc' => 'Peripheral Port A Line 7 (Bi-Directional)',
      ),
      '~RD~' => 
      array (
        'desc' => 'Read Request Input from CPU (Active Low)',
      ),
      '~IORQ~' => 
      array (
        'desc' => 'Input/Output Request Input from CPU (Active Low)',
      ),
      '~M1~' => 
      array (
        'desc' => 'Machine Cycle 1 Input from CPU (Active Low)',
      ),
      'D3' => 
      array (
        'desc' => 'Data Line 3 To CPU (Bi-Directional)',
      ),
      'D4' => 
      array (
        'desc' => 'Data Line 4 To CPU (Bi-Directional)',
      ),
      'D5' => 
      array (
        'desc' => 'Data Line 5 To CPU (Bi-Directional)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum Voltage Vcc',
        'val' => '7',
        'unit' => 'VDC',
      ),
      1 => 
      array (
        'param' => 'Maximum Input Voltage',
        'val' => 'Vcc + 0.3',
        'unit' => 'VDC',
      ),
      2 => 
      array (
        'param' => 'Storage Temperature',
        'val' => '-65 to +150',
        'unit' => 'Degrees C',
      ),
    ),
    'notes' => 
    array (
      0 => 'The Z8O Parallel I/O (PlO) Circuit is a programmable, two port device which provides a TTL compatible interface between peripheral devices and the Z80-GPU. The CPU can configure the Z8O-PIO to interface with a wide range of peripheral devices with no other external logic required, Typical peripheral devices that are fully compatible with the Z80-PIO include most keyboards, paper tape readers and punches, printers, PROM programmers, etc. The Z8O-PIO is packaged in a 40-pin DIP, or a 44-pin PLCC, or a 44-pin OFP. NMOS and CMOS versions are also available. Major features of the Z80-PlO include.',
      1 => 'One of the unique features of the Z80-PlO that separates it from other interface controllers is that all data transfer between the peripheral device and the CPU is accomplished under total interrupt control. The interrupt logic of the PIO permits full usage of the efficient interrupt capabilities of the Z80-CPU during I/0 transfers. All logic necessary to implement a fully nested interrupt structure is included in the PIO so that additional circuits are not required. Another unique feature of the PlO is that it can be programmed to interrupt the CPU on the occurrence of specified status conditions in the peripheral device. For example, the PlO can be programmed to interrupt if any specified peripheral alarm conditions should occur. This interrupt capability reduces the amount of time that the processor must spend in polling peripheral status.',
    ),
    'packages' => 
    array (
      'DIP' => 
      array (
        1 => 'D2',
        2 => 'D7',
        3 => 'D6',
        4 => '~CE~',
        5 => 'C/~D~',
        6 => 'B/~A~',
        7 => 'PA7',
        8 => 'PA6',
        9 => 'PA5',
        10 => 'PA4',
        11 => 'GND',
        12 => 'PA3',
        13 => 'PA2',
        14 => 'PA1',
        15 => 'PA0',
        16 => '~ASTB~',
        17 => '~BSTB~',
        18 => 'ARDY',
        19 => 'D0',
        20 => 'D1',
        21 => 'BRDY',
        22 => 'IEO',
        23 => '~INT~',
        24 => 'IEI',
        25 => 'CLK',
        26 => '+5V',
        27 => 'PB0',
        28 => 'PB1',
        29 => 'PB2',
        30 => 'PB3',
        31 => 'PB4',
        32 => 'PB5',
        33 => 'PB6',
        34 => 'PB7',
        35 => '~RD~',
        36 => '~IORQ~',
        37 => '~M1~',
        38 => 'D3',
        39 => 'D4',
        40 => 'D5',
      ),
    ),
  ),
);