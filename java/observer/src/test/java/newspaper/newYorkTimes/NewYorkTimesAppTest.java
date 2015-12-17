package newspaper.newYorkTimes;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import java.io.ByteArrayOutputStream;
import java.io.PrintStream;

import static org.junit.Assert.*;

public class NewYorkTimesAppTest {
    private final ByteArrayOutputStream outputStream = new ByteArrayOutputStream();

    @Before
    public void SetUp() {
        System.setOut(new PrintStream(outputStream));
    }

    @After
    public void tearDown() {
        System.setOut(null);
    }

    @Test
    public void testAppObserver() {
        NewYorkTimesAppServer server = new NewYorkTimesAppServer();
        NewYorkTimesAndroidClient androidClient = new NewYorkTimesAndroidClient();
        NewYorkTimesiOSClient iOSClient = new NewYorkTimesiOSClient();

        server.registerClient(androidClient);
        server.registerClient(iOSClient);

        server.notifyAllCLients();
        assertEquals("This is a android notification\nThis is a iOS notification\n", outputStream.toString());
    }
}